<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relacion;

class InformesController extends Controller
{
    public function informeGenomaUnNodo($idSujeto, $idGenoma){
        $relaciones = Relacion::where("idsujeto","=",$idSujeto);
        $relaciones = $relaciones->where("from", "=",$idGenoma, "or", "to", "=",$idGenoma);
        $relaciones = $relaciones->get();
        return $relaciones;
    }

    public function informeGenomaDosNodo($idSujeto, $idGenomaA, $idGenomaB){
        $relaciones = Relacion::where("idsujeto","=",$idSujeto);
        $relaciones = $relaciones->where("(", "from", "=",$idGenomaA, "and", "to", "=",$idGenomaB, ")", "or" , "(", "from", "=",$idGenomaB, "and", "to", "=",$idGenomaA, ")");
        $relaciones = $relaciones->get();
        return $relaciones;
    }
}
