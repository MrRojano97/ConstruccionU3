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
        $sujeto->archivoJson=$request->archivoJson;
        $a=$sujeto->save();
        //print_r(($a->id));
        //return redirect('/rutaSujeto/'.$sujeto->id);
        //return $sujeto;
        return compact('sujeto');
    } 

    public function index(){
        $sujetos=Sujeto::all();
        
        return compact('sujetos');
        //return compact('posts');
    }

    public function show( $id){
        $sujeto = Sujeto::findOrFail($id);
        //return view('rutaSujeto.show',\compact('sujeto'));
        return compact('sujeto');
    }

    public function update(Request $request, $id){
        $request->validate(
            [
            'nombre'=>'',
            'apellido'=>'',
            'archivoJson'=>''
            ]
        );
        $sujeto = Sujeto::find($id);
        $sujeto->nombre=$request->nombre;
        $sujeto->apellido=$request->apellido;
        $sujeto->archivoJson=$request->archivoJson;
        $sujeto->save();
        return compact('sujeto');
    } 

    public function destroy($id){
        $sujeto= Sujeto::findOrFail($id);
        $sujeto->delete();
        return $id;
    }

}
