<?php

namespace App\Http\Controllers;

use Collator;
use Illuminate\View\View;
use Illuminate\Http\Request;

class Tah extends Controller
{
    function post(Request $req) : View {

        $tags = explode(',', $req->tags);

        return view('welcome')->with('data', $tags);

    }
}
