<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnePostController extends Controller
{
    public function show($alias){
        $post = Post::where('alias', $alias)->first();
        if($post){
            $comments = $post->comments;
            $com = $comments->groupBy('parent_id');
        } else $com = false;
        return view('post',[
            'post' => $post,
            'com' => $com
        ]);
    }
}
