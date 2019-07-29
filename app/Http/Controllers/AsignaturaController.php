<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends Controller
{
    /**
     * Devuelve listado de asignaturas
     *
     * @param  Request $request Datos de request
     * 
     * @option int     mixed$request->facultad ID de facultad
     * @option int     mixed$request->carrera  ID de carrera
     *
     * @return void
     */
    public function all(Request $request)
    {
        $this->validate(
            $request, [
                'facultad' => 'required|exists:facultades,id',
                'carrera' => 'required|exists:carreras,id'
            ]
        );

        return response()->json(
            DB::table('asignaturas')
                ->select('id', 'nombre', 'codigo')
                ->get()
        );
    }

    /**
     * Obtiene un asignatura y su información
     *
     * @param  Request $request Datos de request
     * 
     * @option int     $request->asignatura ID de asignaturasssss
     *
     * @return void
     */
    public function get(Request $request)
    {
        $this->validate(
            $request, [
                'asignatura' => 'required|exists:asignaturas,id'
            ]
        );

        $asignatura = DB::table('asignaturas')
            ->where('id', $request->asignatura)
            ->first();
        
        $asignatura->prerequisitos = DB::table('asignaturas')
            ->whereIn('id', [1, 15])
            ->select('nombre')
            ->get();

        return response()->json($asignatura);
    }
}
