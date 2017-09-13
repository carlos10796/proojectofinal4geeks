<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
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
        $carousel = Carousel::paginate();
        return view('carousel.index', compact('carousel'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousel = new Carousel();
        return view('carousel.create', compact('carousel'));
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

        carousel::create([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/carousel')->with('mensaje', 'Imagen Creada');
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
        $carousel = Carousel::findOrFail($id);
        return view('carousel.edit', compact('carousel'));
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
        $carousel = Carousel::findOrFail($id);
        $carousel->update([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/carousel')->with('mensaje', 'Imagen Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = carousel::find($id);
        Carousel::destroy($id);
        return redirect('/carousel')->with('mensaje', 'Imagen Eliminada');
    }
}
