<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce_601;

class APIController extends Controller
{
    public function searchecommerce (Request $request)
    {
        $cari = $request->input('q');

        $ecommerce = ecommerce_601::where('pengguna', 'LIKE', "%$cari%")->get();

        if ($ecommerce->isEmpty())
        {
            return response()->json([
                'success'   => false,
                'data'      => 'Data Tidak Ditemukan',    
            ],
            404,)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                'success'   =>true,
                'data'      =>$ecommerce,
            ], 200,)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
    }
}
