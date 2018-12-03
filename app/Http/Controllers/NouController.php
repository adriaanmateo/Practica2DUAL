<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class NouController {
    function calcular(){
        //Obtención de parámetros  
        $nombre = $_GET['nom'];
        $data = $_GET['data'];

        //Control de error de nombre
        if($nombre == ""){
            header('../biorritmo/404.blade.php');
        }
        else{
            header('../layouts/master.blade.php');
        }

        $todayDate = strftime( "%Y-%m-%d", time() );
        $datetime1 = date_create($todayDate);
        $datetime2 = date_create($input['Date']);
        $dif = date_diff($datetime1,$datetime2);
        $dif = $dif->format('%a');

        //Control de error de fecha
        if($datetime1->getTimestamp() - $datetime2->getTimestamp() < 0)
            return view('biorritmo.404')->with('values', "Fecha mas adelantada que la actual");

        //Calculo2
        $fisic = round((sin(2*M_PI*($dif/23))*100));
        $emotivo = round((sin(2*M_PI*($dif/28))*100));
        $intelecto = round((sin(2*M_PI*($dif/33))*100));
        $values = array($nombre, $fisic, $emotivo, $intelecto, $input['fechaNacimiento']);

        //Control de error de calculo
        if($fisic == "" || $emotivo == "" || $intelecto == "")
            return view('biorritmo.404')->with('values', "Error en el calculo");

        return view('biorritmo.resultado')->with('values', $values);
    }

    function formulario(){
        return view('biorritmo.formulario');
    }
}
