<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function submit_contact(Request $request) {
        return  $request;
    }
}
