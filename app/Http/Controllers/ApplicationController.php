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
            'applicant_middle_name' => $request->applicant_middle_name,
            'applicant_last_name' => $request->applicant_last_name,
            'grade_level'=> $request->grade_level,
            'birthday'=> $request->birthday,
            'country'=> $request->country,
            'region'=> $request->region,
            'zone'=> $request->zone,
            'guardian_name'=> $request->guardian_name,
            'guardian_type'=> $request->guardian_type,
            'application_type'=>$request->application_type, 
            'Reciept'=>$request->reciept,
            'Transcript'=>$request->transcript,
            'Certificate'=>$request->certificate,
            'Other_Doc'=>$request->other_document
        ]);

        $application->save();
        
        return redirect('/dashboard');
    }

    public function equi_store(Request $request){
        //return ($request);
        $application = Application::create([
            'requestor_id' => Auth::user()->id,
            'applicant_first_name' => $request->applicant_first_name,
            'applicant_middle_name' => $request->applicant_first_name,
            'applicant_last_name' => $request->applicant_first_name,
            'grade_level'=> $request->grade_level,
            'birthday'=> $request->birthday,
            'country'=> $request->country,
            'address1'=> $request->address1,
            'address2'=> $request->address2,
            'guardian_name'=> $request->guardian_name,
            'guardian_type'=> $request->guardian_type,
            'application_type'=>$request->application_type, 
            'Reciept'=>$request->reciept,
            'Transcript'=>$request->transcript,
            'Certificate'=>$request->certificate,
            'Other_Doc'=>$request->other_document 
        ]);
    //   public function validator ()
    //   {
    //       return Validator ::make ($data,[
    //           'firt_name' =>['required', 'string', 'max:255'],
    //           'middle_name' =>['required', 'string','max:255'],
    //           'last_name' => ['required', 'string','max:255'],
    //           'grade_level'=> $['required', 'integer','max:11'],
    //           'birthday'=> ['required', 'date'],
    //           'country'=>['required', 'string','max:255'],
    //           'region'=> $request->region,
    //           'address_line1'
    //           'guardian_name'=> $request->guardian_name,
    //           'guardian_type'=> $request->guardian_type,
    //           'application_type'=>$request->application_type, 
    //           'Reciept'=>$request->reciept,
    //           'Transcript'=>$request->transcript,
    //           'Certificate'=>
              
    //           ])
    //   }
        $application->save();
        
        return redirect('/dashboard');   
    }
}
