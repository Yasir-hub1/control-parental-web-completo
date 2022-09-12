<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carpeta\Carpeta;
use App\Models\Hijo\Hijo;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarpetaController extends Controller
{
    
    public function carpetasHijo($id)
    {
        $hijo = Hijo::findOrFail($id);
        $carpetas = $hijo->carpetas;
        return response()->json([
            'message' => 'Lista de Carpetas del hijo',
            'data' => $carpetas
        ]);
    }
    public function carpetasHijos()
    {
        $user = User::all()->find(Auth::user()->id);
        if ($user->tipo == "T") {

            $uc = new Collection();
            foreach ($user->tutor->hijos as $hijo) {
                $con = new Collection();
                $hijo = Hijo::all()->find($hijo->id);
                $carpetas = Carpeta::where('hijo_id', $hijo->id)->get();
                foreach ($carpetas as $carpeta) {
                    $con->push($carpeta);
                }
                $uc->push([
                    'hijo' => $hijo,
                    'carpetas' => $con
                ]);
            }
            return response()->json([
                'message' => 'carpetas de los hijos',
                'data' => $uc
            ]);
        } else {
            return response()->json([
                'message' => 'Usuario no autorizado'
            ]);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|string',
            'hijo_id' => 'required|exists:hijos,id|numeric',
        ]);
        $carpeta = Carpeta::create($request->all());
        return response()->json([
            'message' => '¡Carpeta creada exitosamente!',
            'data' => $carpeta
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'required|string',
            'hijo_id' => 'required|exists:hijos,id|numeric',
        ]);
        $carpeta = Carpeta::findOrFail($id);
        if (isset($carpeta)) {
            $carpeta->update($request->all());
            return response()->json([
                'message' => '¡Carpeta actualizada exitosamente!',
                'data' => $carpeta
            ]);
        } else {
            return response()->json([
                'message' => 'Error carpeta no existe'
            ], 403);
        }
    }
    public function show($id)
    {
        $carpeta = Carpeta::findOrFail($id);
        if (isset($carpeta)) {
            return response()->json([
                'message' => '¡Carpeta encontrado exitosamente!',
                'data' => $carpeta
            ]);
        } else {
            return response()->json([
                'message' => 'Error carpeta no existe'
            ], 403);
        }
    }
    public function destroy($id)
    {
        $carpeta = Carpeta::findOrFail($id);
        if (isset($carpeta)) {
            $carpeta->delete();
            return response()->json([
                'message' => '¡Carpeta eliminado exitosamente!',
                'data' => $carpeta
            ]);
        } else {
            return response()->json([
                'message' => 'Error carpeta no existe'
            ], 403);
        }
    }
}
