<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Archivo\Archivo;
use App\Models\Carpeta\Carpeta;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function archivoCarpeta($id)
    {
        $carpeta = Carpeta::findOrFail($id);
        $archivos = $carpeta->archivos;
        return response()->json([
            'message' => 'Lista de Archivos de la carpeta',
            'data' => $archivos
        ]);
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'fecha'=>'required|date',
            'nombre_archivo'=>'required|string',
            'carpeta_id'=>'required|exists:carpetas,id',
        ]);
        $archivo = Archivo::create($request->all());
        return response()->json([
            'message' => '¡Archivo creado exitosamente!',
            'data' => $archivo
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha'=>'required|date',
            'nombre_archivo'=>'required|string',
            'carpeta_id'=>'required|exists:carpetas,id',
        ]);
        $archivo = Archivo::findOrFail($id);
        if (isset($archivo)) {
            $archivo->update($request->all());
            return response()->json([
                'message' => '¡archivo actualizada exitosamente!',
                'data' => $archivo
            ]);
        } else {
            return response()->json([
                'message' => 'Error Archivo no existe'
            ], 403);
        }
    }
    public function show($id)
    {
        $archivo = Archivo::findOrFail($id);
        if (isset($archivo)) {
            return response()->json([
                'message' => '¡Archivo encontrado exitosamente!',
                'data' => $archivo
            ]);
        } else {
            return response()->json([
                'message' => 'Error archivo no existe'
            ], 403);
        }
    }
    public function destroy($id)
    {
        $archivo = Archivo::findOrFail($id);
        if (isset($archivo)) {
            $archivo->delete();
            return response()->json([
                'message' => '¡Archivo eliminado exitosamente!',
                'data' => $archivo
            ]);
        } else {
            return response()->json([
                'message' => 'Error archivo no existe'
            ], 403);
        }
    }
}
