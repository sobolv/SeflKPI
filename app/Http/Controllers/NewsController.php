<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function load_all(){
        $all_news = \App\Models\Post::orderBy('date', 'DESC')->get();
        return view('news', compact('all_news'));
    }
    public function load_all_t(){
        $all_news = \App\Models\Post::orderBy('date', 'DESC')->get();
        return view('test', compact('all_news'));
    }
    public function load($id){
        $news = \App\Models\Post::find($id);
        $all_news = \App\Models\Post::all();
        $comments = Comment::all()->where('post_id', '=', $id);
        return view('one_news', compact('news', 'all_news', 'comments'));
    }
    public function add_com($id){
        $name = $_POST['nickname'];
        $email = $_POST['email'];
        $text = $_POST['rev_text'];
        $post_id = $id;
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
        $review = new Comment;
        $review->name = $name;
        $review->email = $email;
        $review->text = $text;
        $review->post_id = $post_id;
        $review->date = $date;
        $review->time = $time;
        $review->save();
        return redirect()->back();
    }
}
