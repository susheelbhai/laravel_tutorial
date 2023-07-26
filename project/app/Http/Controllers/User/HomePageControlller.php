<?php

namespace App\Http\Controllers\User;

use App\Models\ContactForm;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomePageControlller extends Controller
{
    public $logo;
    public function index()
    {
    //    return $data = Product::all();
        // return $data = Product::where('id', 4)->get();
        $data = Product::paginate(12);

        return view('welcome', compact('data'));
    }

    public function submit_form(Request $req)
    {
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