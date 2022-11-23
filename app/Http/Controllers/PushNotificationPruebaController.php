<?php

namespace App\Http\Controllers;

use App\Events\PushNotificationEvent;
use App\Models\ContenidoPrueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PushNotificationPruebaController extends Controller
{
    public function index()
    {
        $postNotifications = auth()->user()->unreadNotifications;

        return view('pruebas.notificaciones', compact('postNotifications'));
    }
    public function link(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string'
        ]);

        $contenidop = ContenidoPrueba::create([
            'descripcion' => $request->descripcion,
            'user_id' => Auth::user()->id
        ]);


        //  auth()->user()->notify(new PruebaNotification($contenidop));
        event(new PushNotificationEvent($contenidop));
        if (count(Auth::user()->expotokens)>0) {
            $channelName = 'news';
            $recipient = Auth::user()->expotokens[0]->expo_token;
            // You can quickly bootup an expo instance
            $expo = \ExponentPhpSDK\Expo::normalSetup();
            // Subscribe the recipient to the server
            $expo->subscribe($channelName, $recipient);
            // Build the notification data
            $notification = ['body' => $contenidop->descripcion];
            // Notify an interest with a notification
            $expo->notify([$channelName], $notification);
        }
        return redirect()->back()->with('message', 'Notificación creada');
    }
    public function markNotification(Request $request)
    {
        auth()->user()->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })->markAsRead();
        return response()->noContent();
    }
}
