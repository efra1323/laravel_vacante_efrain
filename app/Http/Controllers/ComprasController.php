<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers;

class ComprasController extends Controller
{
    //index
    public function index()
    {
    	
        return response()->json(DB::table('compras')->get());

    }


     public function destroy(Request $request)
    {
    	$data= (object) $request->json()->all();

        $delete = $data->id;

        DB::table('compras')->where('id', '=', $delete)->delete();
    }


     public function update(Request $request)
    {
    	$data= (object) $request->json()->all();

        DB::table('compras')
            ->where('id', $data->id)
            ->update(['fecha'=>$data->fecha,'total'=>$data->total]);

        return response()->json($data);
    }
    

     public function store(Request $request)
    {
    	
        $data = (object) $request->json()->all();

        $id = DB::table('compras')->insertGetId(['total' => $data->total, 'fecha' => Carbon::now()]);

        $data->id=$id;
        return response()->json($data);
    }
}