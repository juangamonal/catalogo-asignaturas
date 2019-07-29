<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultadController extends Controller
{
    /**
     * Devuelve listado de todas las facultades
     *
     * @return void
     */
    public function all()
    {
        return response()->json(
            DB::table('facultades')
                ->select('id', 'nombre')
                ->get()
        );
    }
}
