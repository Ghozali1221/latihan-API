<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $dataPosts = Post::all();
        return response()->json($dataPosts, 200);
    }
}
