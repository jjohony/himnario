<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisVentas\Http\Requests\ArticuloFormRequest;
use sisVentas\Articulo;
use sisVentas\Http\Requests\CategoriaFormRequest;
use sisVentas\Categoria;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $categorias=DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')->where('condicion','=','1')->orderBy('idcategoria','desc');
            
            $articulos=DB::table('articulo')->where('nombre','LIKE','%'.$query.'%')->where('estado','=','Activo')->orderBy('idarticulo','desc');
            
            return view('layouts.admin',["categorias"=>$categorias,"articulos"=>$articulos]);
        }
    }
}
