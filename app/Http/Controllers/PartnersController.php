<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function load(){
        $partners = \App\Models\Partners::all();
        return view('partners', compact('partners'));
    }
}
