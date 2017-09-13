<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;


class TitleController extends Controller
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
        $title = title::orderBy('id', ('DESC'))->paginate();
        return view('title.index', compact('title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = new title();
        return view('title.create', compact('title'));
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

        title::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/title')->with('mensaje', 'Título Creado');
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
        $title = title::findOrFail($id);
        return view('title.edit', compact('title'));
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

        $title = Title::findOrFail($id);
        $title->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/title')->with('mensaje', 'Título Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Title::destroy($id);
        return redirect('/title')->with('mensaje', 'Contacto Eliminado');
    }
}
