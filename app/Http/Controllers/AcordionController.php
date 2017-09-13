<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acordion;

class AcordionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acordion = Acordion::orderBy('id', ('DESC'))->paginate();
        return view('acordion.index', compact('acordion'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acordion = new Acordion();
        return view('acordion.create', compact('acordion'));
    }

    /**
     * Almacenar un recurso recién creado en almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_route = null;

        Acordion::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/acordion')->with('mensaje', 'Texto Creado');
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
        $acordion = Acordion::findOrFail($id);
        return view('acordion.edit', compact('acordion'));
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
        $file_route = null;

        $acordion = Acordion::findOrFail($id);
        $acordion->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/acordion')->with('mensaje', 'Título Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Acordion::destroy($id);
        return redirect('/acordion')->with('mensaje', 'Contacto Eliminado');
    }
}
