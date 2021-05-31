<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function load(){
        $reviews = \App\Models\Review::all();
        return view('about', compact('reviews'));
    }
    public function add($date, $time){
        $name = $_POST['nickname'];
        $email = $_POST['email'];
        $text = $_POST['rev_text'];
        Models\Review::add_to_BD($name, $email, $text, $date, $time);
        return redirect()->route('/about');
    }
}
