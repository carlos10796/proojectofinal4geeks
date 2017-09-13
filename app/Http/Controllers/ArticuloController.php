<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
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
        $articulo = articulo::orderBy('id', ('DESC'))->paginate();
        return view('articulo.index', compact('articulo'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulo = new articulo();
        return view('articulo.create', compact('articulo'));
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

        $this->validate($request, [
            'imagen-file' => 'image|mimes:jpg,png,svg,jpeg',
        ]);

        if($request->file('imagen-file')){
            // Capturo la imagen
            $img = $request->file('imagen-file');
            // Obtengo el nombre real
            $file_route = $img->getClientOriginalName();
            // Almaceno la imagen en la carpeta
            Storage::disk('imagenCursos')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
            $file_route = "sin-imagen.jpg";
        }   

        articulo::create([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/articulo')->with('mensaje', 'Articulo Creada');
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
        $articulo = articulo::findOrFail($id);
        return view('articulo.edit', compact('articulo'));
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

        $this->validate($request, [
            'imagen-file' => 'image|mimes:jpg,png,svg,jpeg',
        ]);

        if($request->file('imagen-file')){
            // Capturo la imagen
            $img = $request->file('imagen-file');
            // Obtengo el nombre real
            $file_route = $img->getClientOriginalName();
            // Almaceno la imagen en la carpeta
            Storage::disk('imagenCursos')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
            $file_route = "sin-imagen.jpg";
        }   
        $articulo = Articulo::findOrFail($id);
        $articulo->update([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/articulo')->with('mensaje', 'Articulo Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articulo::destroy($id);
        return redirect('/articulo')->with('mensaje', 'Contacto Eliminado');
    }
}
