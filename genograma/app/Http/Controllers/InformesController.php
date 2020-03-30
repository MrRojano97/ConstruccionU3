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
        $familias = Relacion::where("idsujeto","=",$idSujeto);
        $familias = $familias->where("from", "=",$idGenoma, "or", "to", "=",$idGenoma, "and", "category", "=", "Link");
        $familias = $familias->get();
        foreach($familias as $familia){
            $hijos = Relacion::where("idsujeto","=",$idSujeto);
            $hijos = $hijos->where("from", "=",$familia->id, "or", "to", "=",$familia->id);
            $hijos = $hijos->get();
            $relaciones=$relaciones+$hijos;
        }
        return $relaciones;
    }

    public function informeGenomaDosNodo($idSujeto, $idGenomaA, $idGenomaB){
        $relaciones = Relacion::where("idsujeto","=",$idSujeto);
        $relaciones = $relaciones->where("(", "from", "=",$idGenomaA, "and", "to", "=",$idGenomaB, ")", "or" , "(", "from", "=",$idGenomaB, "and", "to", "=",$idGenomaA, ")");
        $relaciones = $relaciones->get();
        $familias = Relacion::where("idsujeto","=",$idSujeto);
        $familias = $familias->where("(", "from", "=",$idGenomaA, "and", "to", "=",$idGenomaB, ")", "or" , "(", "from", "=",$idGenomaB, "and", "to", "=",$idGenomaA, ")" , "and", "category", "=", "Link");
        $familias = $familias->get();
        foreach($familias as $familia){
            $hijos = Relacion::where("idsujeto","=",$idSujeto);
            $hijos = $hijos->where("from", "=",$familia->id, "or", "to", "=",$familia->id);
            $hijos = $hijos->get();
            $relaciones=$relaciones+$hijos;
        }
        return $relaciones;
    }
}
