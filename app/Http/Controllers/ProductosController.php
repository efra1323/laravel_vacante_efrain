<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers;

class ProductosController extends Controller
{
    //index
    public function index()
    {
    	return response()->json(DB::table('productos')->get());
    }


     public function destroy()
    {
    	return "Borrar";
    }


     public function update()
    {
    	return "Actualizar";
    }
    

     public function store()
    {
    	return "Guardar";
    }
}
