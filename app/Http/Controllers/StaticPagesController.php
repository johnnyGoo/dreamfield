<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function dream_field(){
      return view('static_pages/dream_field');
    }
}
