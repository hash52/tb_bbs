<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post;
        $post->fill($request->all());
        if (Auth::check()) {
            $post->user_id = Auth::id();
        }
        $post->save();
        return redirect()->back();
    }
}
