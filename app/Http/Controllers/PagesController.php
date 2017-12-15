<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    //
    public function home(){
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('pages/home', compact('feed_items'));
    }
    public function about(){
        return view('pages/about');
    }
}