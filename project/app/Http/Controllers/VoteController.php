<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class VoteController extends Controller
{
    function index(Request $req){

        Mail::to('ffsh@fjhjg.jf')->send(new WelcomeEmail);
        return $req->age;
        
        
    }
}
