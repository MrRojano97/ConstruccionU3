<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relacion;

class InformesController extends Controller
{
    public function informeGenomaUnNodo($idSujeto, $idGenoma){
        /*
        $idSujeto=2;
        $idGenoma=1;
        */
        $relaciones = Relacion::where("idsujeto","=",$idSujeto);
        $relaciones = $relaciones->where("from", "=",$idGenoma, "or", "to", "=",$idGenoma);
        $relaciones = $relaciones->get();
        return $relaciones;
    }

    public function informeGenomaDosNodo($idSujeto, $idGenomaA, $idGenomaB){
        /*
        $idSujeto=2;
        $idGenomaA=1;
        $idGenomaB=2;
        */
        $relaciones = Relacion::where("idsujeto","=",$idSujeto);
        $relaciones = $relaciones->where("(", "from", "=",$idGenomaA, "and", "to", "=",$idGenomaB, ")", "or" , "(", "from", "=",$idGenomaB, "and", "to", "=",$idGenomaA, ")");
        $relaciones = $relaciones->get();
        return $relaciones;
    }
}
