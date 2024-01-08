<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailPostResources;
use App\Http\Resources\PostResources;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $dataPosts = Post::all();
        // versi 1
        // return response()->json(['dataAPI' => $dataPosts], 200);
        // versi II
        return PostResources::collection($dataPosts);
    }

// versi I
    public function show($id)
    {
        $dataPost = Post::with('writer:id,first_name')->findOrFail($id);
        return new DetailPostResources($dataPost);
    }

// versi II
    public function show_detail($id)
    {
        $data = Post::findOrFail($id);
        return new DetailPostResources($data);
    }
}
