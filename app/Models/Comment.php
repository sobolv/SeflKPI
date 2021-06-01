<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Request;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');

    }
    public static function add_to_BD($name, $email, $text, $post_id, $parent_id, $date, $time){
        $validator = Validator::make(Request::all(), [
            $name => ['required', 'string', 'max:255'],
            $email => ['required','string','email','max:255'],
            $text => ['required', 'string', 'max:1000'],
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
        $review->parent_id = $parent_id;
        $review->date = $date;
        $review->time = $time;
        $review->save();

//        DB::insert('insert into reviews (`name`, email, text, `date`, `time`) values (?, ?, ?, ?, ?)', [$name, $email, $text, $date, $time]);
    }
}
