<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index_GET(){
        return view('productos.index');
    }
    public function create_GET(){
        return view('productos.create');
    }
    public function show_GET($productoId,$stock=0){
        return view('productos.show',compact("productoId","stock"));
    }
}
