<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class HomeController extends Controller
{
    //
    public function index()
    {
        $tweets = auth()->user()->timeline();
        return view('home', ['tweets' => $tweets]);
    }
}
