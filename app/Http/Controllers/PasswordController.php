<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //

    public function passwordforget(){

        return view('Password.forget');

    }
}
