<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Auth;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function auth_index(){
        return view('application.auth-form');

    }

    public function equi_index(){
        return view('application.equi-form');
    }

    public function auth_store(Request $request){

        
        $application = Application::create([
            'requestor_id' => $request->requestor_id,
            'applicant_first_name' => $request->applicant_first_name,
            'applicant_middle_name' => $request->applicant_first_name,
            'applicant_last_name' => $request->applicant_first_name,
            'grade_level'=> $request->grade_level,
            'birthday'=> $request->birthday,
            'country'=> $request->country,
            'region'=> $request->region,
            'zone'=> $request->zone,
            'guardian_name'=> $request->guardian_name,
            'guardian_type'=> $request->guardian_type,
            'application_type'=>$request->application_type,  
        ]);

        $application->save();
        
        return redirect('/dashboard');
    }

    public function equi_store(Request $request){
        return ($request);
        $application = Application::create([
            'requestor_id' => Auth::user()->id,
            'applicant_first_name' => $request->applicant_first_name,
            'applicant_middle_name' => $request->applicant_first_name,
            'applicant_last_name' => $request->applicant_first_name,
            'grade_level'=> $request->grade_level,
            'birthday'=> $request->birthday,
            'country'=> $request->country,
            'region'=> $request->region,
            'zone'=> $request->zone,
            'guardian_name'=> $request->guardian_name,
            'guardian_type'=> $request->guardian_type,
            'application_type'=>$request->application_type  
        ]);

        $application->save();
        
        return redirect('/dashboard');   
    }
}
