<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DiscussionsController extends Controller
{
    // Get Data
    public function DataDiscussion(Request $request){
        // Get komentar limit 6 komenttar


        $limit = $request->input('limit', 6);

        //ambil datanya
        $discussion = Discussion::query();
        return ResponseFormatter::success(
         $discussion->paginate($limit),
         'Disuccsion Successful Get'
        );
    }

    public function PostDataDiscusion(Request $request){
        // Create komentar
    }
    //
}
