<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function all(Request $request){
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        // Membatasi hanya 6 Request
        $name = $request->input('id');


        // Filtering berdasarkan harga
        // terkecil -> besar
    }
}
