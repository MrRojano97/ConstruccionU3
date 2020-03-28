<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relacion;

class RelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relacion = Relacion::all();
        return $relacion;
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
        $relacion = new Relacion();
        $relacion->category = $request->category;
        $relacion->from = $request->from;
        $relacion->to = $request->to;
        $relacion->idSujeto = $request->idSujeto;
        $relacion->save();
        return $relacion;
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
        $relacion = Relacion::find($id);
        $relacion->category = $request->category;
        $relacion->from = $request->from;
        $relacion->to = $request->to;
        $relacion->idSujeto = $request->idSujeto;
        $relacion->save();
        return $relacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relacion = Relacion::find($id);
        $relacion->delete();
    }
}