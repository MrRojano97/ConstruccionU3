<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relacion;

class RelacionController extends Controller
{
     // 
     public function store(Request $request){
        $request->validate(
            [
            'id'=>'',
            'category'=>'',
            'from'=>'',
            'to'=>'',
            'idSujeto'=>'']
        ); 
        $relacion = new Relacion();
        $relacion->id=$request->id;
        $relacion->category=$request->category;
        $relacion->from=$request->from;
        $relacion->to=$request->to;
        $relacion->idsujeto=$request->idSujeto;
        $relacion->save();
        return $relacion;
    }

    
    public function index(){
        $posts=Relacion::all();
        //return view('relacion.index',\compact('posts'));
        return $posts;
    }

    public function show( $idRelacion,$idSujeto){
        $sujeto = Relacion::where('id', '=', $idRelacion, 'and', 'idSujeto', '=', $idSujeto );
        //return view('relacion.show',compact('sujeto'));
        return $sujeto ;
    }

    public function update( $idRelacion,$idSujeto, Request $request){
        $request->validate(
            ['category'=>'',
            'from'=>'',
            'to'=>'',
            'idSujeto'=>'']
        );
        $relacion = Relacion::where('id', '=', $idRelacion, 'and', 'idSujeto', '=', $idSujeto );
        $relacion->category=$request->category;
        $relacion->from=$request->from;
        $relacion->to=$request->to;
        $relacion->idsujeto=$request->idSujeto;
        $relacion->save();
        //return redirect('/relacion/'.$relacion->id);
        return $relacion;
    }

    public function destroy($idRelacion,$idSujeto){
        $relacion= Relacion::where('id', '=', $idRelacion, 'and', 'idSujeto', '=', $idSujeto );
        $relacion->delete();
        //return redirect('/relacion');
        return $idRelacion;
    }
}