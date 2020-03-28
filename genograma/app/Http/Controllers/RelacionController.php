<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relacion;

class RelacionController extends Controller
{
     //
     public function store(Request $request){
        $request->validate(
            ['category'=>'',
            'from'=>'',
            'to'=>'',
            'idSujeto'=>'']
        );
        $relacion = new Relacion();
        $relacion->category=$request->category;
        $relacion->from=$request->from;
        $relacion->to=$request->to;
        $relacion->idsujeto=$request->idSujeto;
        $relacion->save();
        //return redirect('/relacion/'.$genograma->id);
        return $relacion;
    }

    
    public function index(){
        $posts=Relacion::all();
        //return view('relacion.index',\compact('posts'));
        return $posts;
    }

    public function show( $id){
        $sujeto = Relacion::findOrFail($id);
        //return view('relacion.show',compact('sujeto'));
        return $posts;
    }

    public function update(Request $request, $id){
        $request->validate(
            ['category'=>'',
            'from'=>'',
            'to'=>'',
            'idSujeto'=>'']
        );
        $relacion = new Relacion();
        $relacion->category=$request->category;
        $relacion->from=$request->from;
        $relacion->to=$request->to;
        $relacion->idsujeto=$request->idSujeto;
        $relacion->save();
        //return redirect('/relacion/'.$relacion->id);
        return $relacion;
    }

    public function destroy($id){
        $relacion= Relacion::findOrFail($id);
        $relacion->delete();
        //return redirect('/relacion');
        return $$id;
    }
}