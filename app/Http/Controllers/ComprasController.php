<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers;

class ComprasController extends Controller
{
    //index
    public function index()
    {
    	return "hello world";
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
