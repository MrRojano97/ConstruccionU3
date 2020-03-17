<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public $sujetoA;
    public $sujetoB;
    public $tipoRelacion;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct($sujetoA, $sujetoB, $tipoRelacion)
    {
        $this->sujetoA = $sujetoA;
        $this->sujetoB = $sujetoB;
        $this->tipoRelacion = $tipoRelacion;
    }

    public function getSujetoA(){
        return $this->sujetoA;
    }

    public function setSujetoA($sujeto){
        $this->sujetoA = $sujeto;
    }

    public function getSujetoB(){
        return $this->sujetoB;
    }

    public function setSujetoB($sujeto){
        $this->sujetoB = $sujeto;
    }
    
    public function getTipoRelacion(){
        return $this->tipoRelacion;
    }

    public function setTipoRelacion($tipo){
        $this->tipoRelacion = $tipo;
    }
}
