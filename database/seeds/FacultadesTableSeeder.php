<?php

use Illuminate\Database\Seeder;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = '[{"COD_FAC":"53","INST_NOMBRE":"FACULTAD DE CIENCIAS"},{"COD_FAC":"51","INST_NOMBRE":"FACULTAD DE CIENCIAS ECON\u00d3MICAS Y ADMINISTRATIVAS"},{"COD_FAC":"824","INST_NOMBRE":"FACULTAD DE COMUNICACI\u00d3N, HISTORIA Y CIENCIAS SOCIALES"},{"COD_FAC":"56","INST_NOMBRE":"FACULTAD DE DERECHO"},{"COD_FAC":"54","INST_NOMBRE":"FACULTAD DE EDUCACI\u00d3N"},{"COD_FAC":"50","INST_NOMBRE":"FACULTAD DE INGENIER\u00cdA"},{"COD_FAC":"52","INST_NOMBRE":"FACULTAD DE MEDICINA"},{"COD_FAC":"57","INST_NOMBRE":"INSTITUTO DE TEOLOG\u00cdA"},{"COD_FAC":"446","INST_NOMBRE":"INSTITUTO TECNOL\u00d3GICO"}]';
        $data = json_decode($data);

        foreach ($data as $fac) {
            DB::table('facultades')
                ->insert([
                    'nombre' => $fac->INST_NOMBRE,
                    'codigo' => $fac->COD_FAC
                ]);    
        }
    }
}
