<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Request;
use Illuminate\Support\Facades\Validator;
use \App\Models\Review;

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
        $validator = Validator::make(Request::all(), [
            'nickname' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255'],
            'rev_text'=> ['required', 'string', 'max:1000'],
        ]);
        // if fails redirects back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $review = new Review;
        $review->name = $name;
        $review->email = $email;
        $review->text = $text;
        $review->date = $date;
        $review->time = $time;
        $review->save();
        return redirect()->route('about');
    }
}
