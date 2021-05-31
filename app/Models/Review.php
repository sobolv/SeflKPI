<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public static function add_to_BD($name, $email, $text, $date, $time){
        $review = new Review;
        $review->name = $name;
        $review->email = $email;
        $review->text = $text;
        $review->date = $date;
        $review->time = $time;
        $review->save();

//        DB::insert('insert into reviews (`name`, email, text, `date`, `time`) values (?, ?, ?, ?, ?)', [$name, $email, $text, $date, $time]);
    }
}
