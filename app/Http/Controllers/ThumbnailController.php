<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thumbnail;
use Illuminate\Support\Facades\Storage;

class ThumbnailController extends Controller
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
        $thumbnail = Thumbnail::paginate();
        return view('thumbnail.index', compact('thumbnail'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thumbnail = new Thumbnail();
        return view('thumbnail.create', compact('thumbnail'));
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

        thumbnail::create([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/thumbnail')->with('mensaje', 'Thumbnail Creado');
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
        $thumbnail = Thumbnail::findOrFail($id);
        return view('thumbnail.edit', compact('thumbnail'));
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
          
        $thumbnail = Thumbnail::findOrFail($id);
        $thumbnail->update([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/thumbnail')->with('mensaje', 'Thumbnail Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thumbnail = thumbnail::find($id);
        Thumbnail::destroy($id);
        return redirect('/thumbnail')->with('mensaje', 'Thumbnail Eliminada');
    }
}
