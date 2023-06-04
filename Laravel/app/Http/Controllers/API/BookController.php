<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function all(Request $request){
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        // Membatasi hanya 6 Request
        $name = $request->input('name');
        $language = $request->input('language');

        // Filtering berdasarkan rating
        // terkecil -> besar
        $rating_from = $request->input('rate_from');
        $rating_to = $request->input('rate_to');

        // Pengembalian data berdasarkan ID
        if($id){
            $book = Book::find($id);

            if($book){
                return ResponseFormatter::success([
                    $book,
                    'Data buku berhasil diambil'
                ]);
            }else{
                return ResponseFormatter::error([
                    null,
                    'Data produk tidak di temukan',
                    404
                ]);
            }
        }

        // Fetching sisanya
        // Untuk query yang diluar ID
        // Siapkan query nya dulu
        $book = Book::query();

        // Filtering berdasarkan nama
        if($name){
            $book->where('name', 'like', '%' . $name . '%');
        }

        // Filtering berdasarkan bahasa
        if($language){
            $book->where('language', 'like', '%' . $language . '%');
        }

        // Filtering berdasarkan rating lebih tinggi
        if($rating_from){
            $book->where('rating', '>=' , $rating_from);
        }

        // Filtering berdasarkan rating terendah
        if($rating_to){
            $book->where('rating'. '<=', $rating_to);
        }

        return ResponseFormatter::success(
           $book->paginate($limit),
             'List Buku berhasil di ambil'
        );
    }
}


