<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function load(){
        $portfolios = \App\Models\Portfolio::orderBy('id', 'DESC')->get();
        return view('portfolio', compact('portfolios'));
    }
}
