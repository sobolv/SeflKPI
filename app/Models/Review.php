<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public static function add_to_BD($name, $email, $text, $date, $time){
        DB::insert('insert into reviews (name, email, text,) values (?, ?)', [1, 'Dayle']);
    }
}
