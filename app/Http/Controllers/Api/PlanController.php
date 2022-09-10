<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->user()->tipo;
       $user=User::findOrFail($request->user()->id);
        if ($user->tipo == "A") {
            $validateData = $request->validate([
                'dispositivos' => 'required|numeric|max:20',
                'estado' => 'required|boolean',
                'nombre' => 'required|string|max:40|unique:planes,nombre',
                'precio' => 'required|numeric',
                'tiempo_plan' => 'required|string|max:40',
            ]);

            $plan = Plan::create([
                'dispositivos' => $validateData['dispositivos'],
                'estado' => $validateData['estado'],
                'nombre' => $validateData['nombre'],
                'precio' => $validateData['precio'],
                'tiempo_plan' => $validateData['tiempo_plan'],
            ]);
            return response()->json([
                'message' => '¡Plan creado exitosamente!',
                'plan' => $plan
            ], 404);
        } else {
            return response()->json([
                'message' => 'Debe ser un Administrador para colocar un nuevo Plan'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($request->user()->id);
        if ($user->tipo == "A") {
            $plan = Plan::findOrFail($id);
            $request->validate([
                'dispositivos' => 'required|numeric|max:20',
                'estado' => 'required|boolean',
                'nombre' => 'required|string|max:40',
                'precio' => 'required|numeric',
                'tiempo_plan' => 'required|string|max:40',
            ]);

            $plan->update($request->all());
            return response()->json([
                'message' => '¡Plan actualizado exitosamente!',
                'plan' => $plan
            ], 404);
        } else {
            return response()->json([
                'message' => 'Debe ser un Administrador para colocar un nuevo Plan'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
