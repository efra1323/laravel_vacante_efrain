<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers;

class ProductosController extends Controller
{
    
    public function index()
    {

    	return response()->json(DB::table('productos')->get());

    }


    public function destroy(Request $request)
    {
        $data= (object) $request->json()->all();

        $delete = $data->id;

        DB::table('productos')->where('id', '=', $delete)->delete();
    }



     public function update(Request $request)
    {

    	$data= (object) $request->json()->all();

        DB::table('productos')
            ->where('id', $data->id)
            ->update(['nombre'=>$data->nombre,'stock'=>$data->stock,'precio'=>$data->precio]);

        return response()->json($data);

    }
    

     public function store(Request $request)
    {

    	$data = (object) $request->json()->all();

        $id = DB::table('compras')->insertGetId(['nombre' => $data->nombre, 'stock' => $data->stock, 'precio'=>$data->precio]);

        $data->id=$id;
        return response()->json($data);
    }
}
