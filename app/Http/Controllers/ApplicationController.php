<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //

    public function auth_index(){
        return view('application.auth-form');

    }

    public function equi_index(){
        return view('application.equi-form');
    }
}
