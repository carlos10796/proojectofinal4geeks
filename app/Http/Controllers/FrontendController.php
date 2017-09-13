<?php

namespace App\Http\Controllers;

use App\Title;
use App\Carousel;
use App\Thumbnail;
use App\Acordion;
use App\Lista;
use App\Articulo;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        //Paginate(4) me dice cuantos registros voy a mostrar en la página
        //OrdenBy me da en que order voy a mostrar los registros asd or desc
        
        $title1 = Title::orderBy('id', 'desc')->paginate(1);
        $carousel2 = Carousel::orderBy('id', 'desc')->paginate(3);
        $thumbnail3 = Thumbnail::orderBy('id', 'desc')->paginate(4);
        $lista4 = Lista::orderBy('id', 'desc')->paginate(6);
        $acordion5 = Acordion::orderBy('id', 'desc')->paginate(4);
        $articulo6 = Articulo::orderBy('id', 'desc')->paginate(2);
        
        //Coloco las tablas que voy a mostrar en el welcome
        //$products2 = Product::orderBy('id', 'desc')->paginate(3);
        //$products3 = Product::orderBy('id', 'desc')->paginate(3);

        //Si temgo varias paginas debo hacer un metodo para cada uno de ellas
        return view('welcome', compact('title1','carousel2','thumbnail3','lista4','acordion5','articulo6'));
    }

}
