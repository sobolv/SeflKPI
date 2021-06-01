<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public static function load(){
        $all_news = \App\Models\Post::orderBy('date', 'DESC')->get();
        $portfolios = \App\Models\Portfolio::orderBy('id', 'DESC')->get();
        $reviews = \App\Models\Review::orderBy('id', 'DESC')->get();
        return view('landing', compact('all_news', 'portfolios', 'reviews'));
    }
}
