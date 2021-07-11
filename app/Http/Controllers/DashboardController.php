<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

use Auth;

class DashboardController extends Controller
{
    //

    public function index(){
        
        $applications = Application::where('requestor_id', Auth::User()->id)->orderBy('id','DESC')->get();;

    	//return $application;
        return view('dashboard', compact('applications'));
    }
}
