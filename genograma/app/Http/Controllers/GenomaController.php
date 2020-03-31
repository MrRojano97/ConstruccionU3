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
            'text'=>'',
            'category'=>'',
            'idSujeto'=>'']
        );
        $genograma = new Genoma();
        $genograma->id=$request->id;
        $genograma->text=$request->text;
        $genograma->category=$request->category;
        $genograma->idSujeto=$request->idSujeto;
        $genograma->save();
        return compact('genograma');

    }

    
    public function index(){
        $posts=Genoma::all();
        return compact('posts');
    }

    public function show( $idGenoma,$idSujeto){
        $sujeto = Genoma::where('id', '=', $idGenoma, 'and', 'idSujeto', '=', $idSujeto );
        //return view('genoma.show',compact('sujeto'));
        return $sujeto;
    }

    public function update($idGenoma,$idSujeto,Request $reques ){
        $request->validate(
            [
            'text'=>'',
            'category'=>'',
            'idSujeto'=>'']
        );
        $genograma = Genoma::where('id', '=', $idGenoma, 'and', 'idSujeto', '=', $idSujeto );
        $genograma->text=$request->text;
        $genograma->category=$request->category;
        $genograma->idSujeto=$request->idSujeto;
        $genograma->save();
        //return redirect('/genoma/'.$genograma->id);
        return compact('genograma');
    }

    public function destroy($idGenoma,$idSujeto){
        $genograma= Genoma::where('id', '=', $idGenema, 'and', 'idSujeto', '=', $idSujeto );
        $genograma->delete();
        return $id;
    } 
}
