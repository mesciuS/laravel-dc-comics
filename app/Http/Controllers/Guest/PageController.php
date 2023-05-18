<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        // uso config per prendere il file .php
        $comics = config('comics');
        // dd($comics);
        return view('home', compact('comics'));
    }
}
