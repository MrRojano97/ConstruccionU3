<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sujeto;

class SujetoController extends Controller
{
    //
    public function registrarSujeto(){
        $data = request()->validate(
            ['nombre'=>'',
            'apellido'=>'',
            'genero'=>'',
            'edad'=>'',
            'archivoJson'=>'']
        );
        $post=Sujeto::create($data);
        return redirect('/rutaSujeto/'.$post->id);
    }

    public function listarSujetos(){
        $posts=Sujeto::all();
        return view('rutaSujeto.index',\compact('posts'));
    }


    public function listarSujeto(Sujeto $post){
        return view('rutaSujeto.show',compact('post'));
    }

    public function actualizarRegistroSujeto(Sujeto $post){
        $data = request()->validate(
            ['nombre'=>'',
            'apellido'=>'',
            'genero'=>'',
            'edad'=>'',
            'archivoJson'=>'']
        );
        $post->update($data);
        return redirect('/rutaSujeto/'.$post->id);
    }

    public function eliminarRegistroSujeto(Sujeto $post){
        $post->delete();
        return redirect('/rutaSujeto');
    }
}
