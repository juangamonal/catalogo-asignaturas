<?php

use Illuminate\Database\Seeder;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = '[{
            "NFILA": "1",
            "COD_RAMO": "BTE127*",
            "RAMO_NOMBRE": " COMPRENSION DEL MEDIO NATURAL SOCIAL Y CULTURAL",
            "COD_UPR": "209",
            "CRED": "10",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "2",
            "COD_RAMO": "LOP0285",
            "RAMO_NOMBRE": "\"DESPUES DE PARRA\": PANORAMA DE LA POESIA CHILENA EN LA SEGUNDA MITAD DEL SIGLO XX",
            "COD_UPR": "361",
            "CRED": "7",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "3",
            "COD_RAMO": "LHT0005",
            "RAMO_NOMBRE": "\"\u00bfIMPERIOS EN CONFLICTO O UNA AMISTAD ESQUIVA?\": LAS RELAC. INTERNAC. ENTRE CHILE Y ESTADOS UNIDOS",
            "COD_UPR": "646",
            "CRED": "6",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "4",
            "COD_RAMO": "EDB053*",
            "RAMO_NOMBRE": "1ER PASOS MUNDO DE LA CIENCI",
            "COD_UPR": "139",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "5",
            "COD_RAMO": "PMI0180",
            "RAMO_NOMBRE": "A COMPARISON OF CHILEAN AND UNITED STATES CULTURES",
            "COD_UPR": "362",
            "CRED": "7",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "6",
            "COD_RAMO": "DA0007C",
            "RAMO_NOMBRE": "A+S; CAMBIANDO REALIDADES EDUCATIVAS INTERDISCIPLINARIAMENTE",
            "COD_UPR": "683",
            "CRED": "5",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "7",
            "COD_RAMO": "IN0033C",
            "RAMO_NOMBRE": "A+S; CAMBIANDO REALIDADES EDUCATIVAS INTERDISCIPLINARIAMENTE",
            "COD_UPR": "683",
            "CRED": "5",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "8",
            "COD_RAMO": "BIO0179",
            "RAMO_NOMBRE": "A.E. INTRODUCCION A LAS COMUNIDADES BENTONICAS",
            "COD_UPR": "145",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "9",
            "COD_RAMO": "BIO0180",
            "RAMO_NOMBRE": "A.E. PARASITOLOGIA MARINA",
            "COD_UPR": "145",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "10",
            "COD_RAMO": "EDB051*",
            "RAMO_NOMBRE": "A\/ELAB.MAT.DIDACT.E.CS.ED.B.",
            "COD_UPR": "139",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "11",
            "COD_RAMO": "IT1205A",
            "RAMO_NOMBRE": "ABASTECIMIENTO Y GESTI\u00d3N DE PROVEEDORES",
            "COD_UPR": "446",
            "CRED": "6",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "12",
            "COD_RAMO": "LOG-210",
            "RAMO_NOMBRE": "ABASTECIMIENTO Y GESTI\u00d3N DE PROVEEDORES",
            "COD_UPR": "446",
            "CRED": "6",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "13",
            "COD_RAMO": "DEC0177",
            "RAMO_NOMBRE": "ACCESO A LA INFORMACION PUBLICA Y LA PROTECCION DE DATOS PERSONALES",
            "COD_UPR": "137",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "14",
            "COD_RAMO": "IT1290A",
            "RAMO_NOMBRE": "ACCIONAMIENTO EL\u00c9CTRICO Y PROTECCI\u00d3N",
            "COD_UPR": "446",
            "CRED": "4",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "15",
            "COD_RAMO": "IN1204C",
            "RAMO_NOMBRE": "ACCIONAMIENTOS ELECTRICOS",
            "COD_UPR": "2146",
            "CRED": "5",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "16",
            "COD_RAMO": "IN1358C",
            "RAMO_NOMBRE": "ACCIONAMIENTOS EL\u00c9CTRICOS",
            "COD_UPR": "2146",
            "CRED": "6",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "17",
            "COD_RAMO": "DEC0013",
            "RAMO_NOMBRE": "ACCIONES CONSTITUCIONALES",
            "COD_UPR": "137",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "18",
            "COD_RAMO": "DA0012C",
            "RAMO_NOMBRE": "ACONDICIONAMIENTO FISICO",
            "COD_UPR": "683",
            "CRED": "5",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "19",
            "COD_RAMO": "ED1244C",
            "RAMO_NOMBRE": "ACONDICIONAMIENTO F\u00cdSICO",
            "COD_UPR": "2126",
            "CRED": "6",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "20",
            "COD_RAMO": "MD1020C",
            "RAMO_NOMBRE": "ACTIVIDAD FISICA Y ESTILOS DE VIDA SALUDABLE",
            "COD_UPR": "1626",
            "CRED": "3",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "21",
            "COD_RAMO": "FMG0022",
            "RAMO_NOMBRE": "ACTIVIDAD FISICA Y FORTALECIMIENTO MUSCULAR",
            "COD_UPR": "683",
            "CRED": "5",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "22",
            "COD_RAMO": "VA0021C",
            "RAMO_NOMBRE": "ACTIVIDAD FISICA Y FORTALECIMIENTO MUSCULAR",
            "COD_UPR": "683",
            "CRED": "6",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "23",
            "COD_RAMO": "MD1333C",
            "RAMO_NOMBRE": "ACTIVIDAD F\u00cdSICA Y ESTILOS DE VIDA SALUDABLE",
            "COD_UPR": "1626",
            "CRED": "4",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "24",
            "COD_RAMO": "BIO0241",
            "RAMO_NOMBRE": "ACTIVIDAD PRACTICA COMPLEMENTARIA",
            "COD_UPR": "145",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "25",
            "COD_RAMO": "CS1039C",
            "RAMO_NOMBRE": "ACTIVIDAD PRACTICA COMPLEMENTARIA",
            "COD_UPR": "145",
            "CRED": "5",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "26",
            "COD_RAMO": "QUA0017",
            "RAMO_NOMBRE": "ACTIVIDAD PRACTICA COMPLEMENTARIA",
            "COD_UPR": "645",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "27",
            "COD_RAMO": "CS1058C",
            "RAMO_NOMBRE": "ACTIVIDAD PR\u00c1CTICA PROFESIONAL",
            "COD_UPR": "145",
            "CRED": "5",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "28",
            "COD_RAMO": "EC1085C",
            "RAMO_NOMBRE": "ACTIVOS DERIVADOS",
            "COD_UPR": "155",
            "CRED": "6",
            "TIPO_CRED": "SCT"
        }, {
            "NFILA": "29",
            "COD_RAMO": "THL073*",
            "RAMO_NOMBRE": "ACTOS Y CONTR.BANCAR.YFINANC",
            "COD_UPR": "137",
            "CRED": "8",
            "TIPO_CRED": "UCSC"
        }, {
            "NFILA": "30",
            "COD_RAMO": "CO1198C",
            "RAMO_NOMBRE": "ACTUALIDAD Y AN\u00c1LISIS POL\u00cdTICO",
            "COD_UPR": "159",
            "CRED": "4",
            "TIPO_CRED": "SCT"
        }]';

        $data = json_decode($data);
        $lorem = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        
        foreach ($data as $asig) {
            DB::table('asignaturas')
                ->insert([
                    'nombre' => $asig->RAMO_NOMBRE,
                    'codigo' => $asig->COD_RAMO,
                    'descripcion' => $lorem
                ]);    
        }
    }
}
