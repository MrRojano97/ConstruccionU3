<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sujeto;

class SujetoController extends Controller
{
    //
    public function store(Request $request){
        
        $sujeto = new Sujeto();
        $sujeto->id=$request->id;
        $sujeto->nombre=$request->nombre;
        $sujeto->apellido=$request->apellido;
        $sujeto->edad=$request->edad;
        $sujeto->archivoJson=$request->archivoJson;
        $sujeto->save();
        //return redirect('/rutaSujeto/'.$sujeto->id);
        return $sujeto;
    } 

    public function index(){
        $sujetos=Sujeto::all();
        
        return $sujetos;
        //return compact('posts');
    }

    public function show( $id){
        $sujeto = Sujeto::findOrFail($id);
        //return view('rutaSujeto.show',\compact('sujeto'));
        return $sujeto;
    }

    public function update(Request $request, $id){
        $request->validate(
            [
            'nombre'=>'',
            'apellido'=>'',
            'edad'=>'',
            'archivoJson'=>''
            ]
        );
        $sujeto = Sujeto::find($id);
        $sujeto->nombre=$request->nombre;
        $sujeto->apellido=$request->apellido;
        $sujeto->edad=$request->edad;
        $sujeto->archivoJson=$request->archivoJson;
        $sujeto->save();
        return $sujeto;
    } 

    public function destroy($id){
        $sujeto= Sujeto::findOrFail($id);
        $sujeto->delete();
        return $id;
    }

}
