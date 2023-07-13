<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageControlller extends Controller
{
        public $logo;
   public function index() {
        return view('welcome');
    }

    public function submit_form(Request $req) {
        $var = new ContactForm;
        $var->name = $req->name;
        $var->email = $req->email;
        $var->phone = $req->phone;
        $var->msg = $req->msg;
        $var->save();

        // ContactForm::create(
        //     [
        //         'name'=> $req->name,
        //         'email'=> $req->email,
        //         'phone'=> $req->phone,
        //         'msg'=> $req->msg,
        //     ],
        // );
        // DB::table('contact_forms')
        // ->insert(
        //     [
        //         'name'=> $req->name,
        //         'email'=> $req->email,
        //         'phone'=> $req->phone,
        //         'msg'=> $req->msg,
        //     ],
        // );

       
        
    }
}


// contact_forms // tablle name
// ContactForm // model