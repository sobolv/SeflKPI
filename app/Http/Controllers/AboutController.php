<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function load(){
        $reviews = \App\Models\Review::orderBy('id', 'DESC')->get();
        return view('about', compact('reviews'));
    }
    public function add(){
        $name = $_POST['nickname'];
        $email = $_POST['email'];
        $text = $_POST['rev_text'];
        $date = date("d.m.y");
        $time = date("H:i");
        \App\Models\Review::add_to_BD($name, $email, $text, $date, $time);
        return redirect()->route('about');
    }
}
