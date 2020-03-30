<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genoma;

class GenomaController extends Controller
{
    //
    public function store(Request $request){
        $request->validate(
            ['id=>',
            'nombre'=>'',
            'apellido'=>'',
            'edad'=>'',
            'category'=>'',
            'loc'=>'',
            'idSujeto'=>'']
        );
        $genograma = new Genoma();
        $genograma->id=$request->id;
        $genograma->nombre=$request->nombre;
        $genograma->apellido=$request->apellido;
        $genograma->edad=$request->edad;
        $genograma->category=$request->category;
        $genograma->loc=$request->loc;
        $genograma->idSujeto=$request->idSujeto;
        $genograma->save();
        //return redirect('/genoma/'.$genograma->id);
        return $genograma;
        //return view('genoma.store',compact('genograma'));
    }

    
    public function index(){
        $posts=Genoma::all();
        return $posts;
    }

    public function show( $idGenoma,$idSujeto){
        $sujeto = Genoma::where('id', '=', $idGenoma, 'and', 'idSujeto', '=', $idSujeto );
        //return view('genoma.show',compact('sujeto'));
        return $sujeto;
    }

    public function update($idGenoma,$idSujeto,Request $reques ){
        $request->validate(
            [
            'nombre'=>'',
            'apellido'=>'',
            'edad'=>'',
            'category'=>'',
            'loc'=>'',
            'idSujeto'=>'']
        );
        $genograma = Genoma::where('id', '=', $idGenoma, 'and', 'idSujeto', '=', $idSujeto );
        $genograma->nombre=$request->nombre;
        $genograma->apellido=$request->apellido;
        $genograma->edad=$request->edad;
        $genograma->category=$request->category;
        $genograma->loc=$request->loc;
        $genograma->idSujeto=$request->idSujeto;
        $genograma->save();
        //return redirect('/genoma/'.$genograma->id);
        return $genograma;
    }

    public function destroy($idGenoma,$idSujeto){
        $genograma= Genoma::where('id', '=', $idGenema, 'and', 'idSujeto', '=', $idSujeto );
        $genograma->delete();
        return $id;
    } 
}
