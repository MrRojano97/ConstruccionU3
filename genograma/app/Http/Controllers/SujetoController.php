<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sujeto;

class SujetoController extends Controller
{
    //
    public function store(Request $request){
        $request->validate(
            ['nombre'=>'',
            'apellido'=>'',
            'genero'=>'',
            'edad'=>'']
        );
        $sujeto = new Sujeto();
        $sujeto->nombre=$request->nombre;
        $sujeto->apellido=$request->apellido;
        $sujeto->genero=$request->genero;
        $sujeto->edad=$request->edad;
        $sujeto->save();
        //return redirect('/rutaSujeto/'.$sujeto->id);
        return $sujeto;
    }

    public function index(){
        $posts=Sujeto::all();
        //return view('rutaSujeto.index',\compact('posts'));
        return $posts;
    }

    public function show( $id){
        $sujeto = Sujeto::findOrFail($id);
        return view('rutaSujeto.show',\compact('sujeto'));
        return $sujeto;
    }

    public function update(Request $request, $id){
        $request->validate(
            ['nombre'=>'',
            'apellido'=>'',
            'genero'=>'',
            'edad'=>'']
        );
        $sujeto = Sujeto::find($id);
        $sujeto->nombre=$request->nombre;
        $sujeto->apellido=$request->apellido;
        $sujeto->genero=$request->genero;
        $sujeto->edad=$request->edad;
        $sujeto->save();
        return redirect('/rutaSujeto/'.$sujeto->id);
        return $sujeto;
    }

    public function destroy($id){
        $sujeto= Sujeto::findOrFail($id);
        $sujeto->delete();
        return $id;
    }
}
