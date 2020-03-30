<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genoma;

class GenomaController extends Controller
{
    //
    public function store(Request $request){
        $request->validate(
            ['text'=>'',
            'category'=>'',
            'idSujeto'=>'']
        );
        $genograma = new Genoma();
        $genograma->text=$request->text;
        $genograma->category=$request->category;
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

    public function show( $id){
        $sujeto = Genoma::findOrFail($id);
        //return view('genoma.show',compact('sujeto'));
        return $sujeto;
    }

    public function update(Request $request, $id){
        $request->validate(
            ['nombre'=>'',
            'apellido'=>'',
            'genero'=>'',
            'edad'=>'']
        );
        $genograma = Genoma::find($id);
        $genograma->text=$request->text;
        $genograma->category=$request->category;
        $genograma->idSujeto=$request->idSujeto;
        $genograma->save();
        //return redirect('/genoma/'.$genograma->id);
        return $genograma;
    }

    public function destroy($id){
        $genograma= Genoma::findOrFail($id);
        $genograma->delete();
        return $id;
    } 
}
