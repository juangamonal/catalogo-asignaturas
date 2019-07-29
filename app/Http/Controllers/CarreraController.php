<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    /**
     * Devuelve listado de todas las carreras
     *
     * @return void
     */
    public function all()
    {
        return response()->json(
            DB::table('carreras')
                ->select('id', 'nombre')
                ->get()
        );
    }
}
