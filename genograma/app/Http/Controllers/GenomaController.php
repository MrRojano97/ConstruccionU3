<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genoma;

class GenomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genoma = Genoma::all();
        return $genoma;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genoma = new Genoma();
        $genoma->key = $request->key;
        $genoma->text = $request->text;
        $genoma->category = $request->category;
        $genoma->idSujeto = $request->idSujeto;
        $genoma->save();
        return $genoma;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genoma = Genoma::find($id);
        $genoma->text = $request->text;
        $genoma->category = $request->category;
        $genoma->idSujeto = $request->idSujeto;
        $genoma->save();
        return $genoma;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genoma = Genoma::find($id);
        $genoma->delete();
    }
}
