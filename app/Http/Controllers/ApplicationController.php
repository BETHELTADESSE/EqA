<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Auth;
use Carbon\Carbon;
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

        $validated = $request->validate([
            'applicant_first_name' => 'required|string|max:255',
            'applicant_middle_name' =>'required|string|max:255',
            'applicant_last_name' => 'required|string|max:255',
            'grade_level'=>'required|string|max:255',
            'birthday'=>'required|date',
            'country'=>'required|string|max:255',
            'region'=>'required|string|max:255',
            'zone'=>'required|string|max:255',
            'guardian_name'=> 'required|string|max:255',
            'guardian_type'=>'required|string|max:255',
            'application_type'=>'required|string|max:255',
            'Reciept'=>'required|image',  
            'Transcript'=>'required|file',  
            'Certificate'=>'required|file',
        ]);
      
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Reciept')){
            $file = $request->file('Reciept');
            $reciept_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$reciept_filename);
        }else
        {
            $reciept_filename = "";
        }
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Transcript')){
            $file = $request->file('Transcript');
            $transcript_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$transcript_filename);
        }else
        {
            $transcript_filename = "";
        }
       
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Certificate')){
            $file = $request->file('Certificate');
            $certificate_filename = $current_timestamp.'-'.$request->applicant_first_name.'-'.$request->applicant_middle_name.'.'.$file->extension();
            $file->storeAs('public/',$certificate_filename);
        }else
        {
            $certificate_filename = "";
        }
        
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Other_Doc')){
            $file = $request->file('Other_Doc');
            $other_doc_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$other_doc_filename);
        }else
        {
            $other_doc_filename = "";
        }
        $application = Application::create([
            'requestor_id' => Auth::user()->id,
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
            'recipt'=>$reciept_filename,
            'application_type'=>$request->application_type, 
            'transcript'=>$transcript_filename,
            'certificate'=>$certificate_filename,
            'other_doc'=>$other_doc_filename
        ]);

        $application->save();
        
        return redirect('/dashboard');
    }

    public function equi_store(Request $request){

        $validated = $request->validate([
            'applicant_first_name' => 'required|string|max:255',
            'applicant_middle_name' =>'required|string|max:255',
            'applicant_last_name' => 'required|string|max:255',
            'grade_level'=>'required|string|max:255',
            'birthday'=>'required|date',
            'country'=>'required|string|max:255',
            'region'=>'required|string|max:255',
            'address_line1'=>'required|string|max:255',
            'address_line2'=>'required|string|max:255',
            'guardian_name'=> 'required|string|max:255',
            'guardian_type'=>'required|string|max:255',
            'application_type'=>'required|string|max:255',
            'Reciept'=>'required|image',  
            'Transcript'=>'required|file',  
            'Certificate'=>'required|file',
            'other_document'=>'required|file',
     ]);
        
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Reciept')){
            $file = $request->file('Reciept');
            $reciept_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$reciept_filename);
        }else
        {
            $reciept_filename = "";
        }
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Transcript')){
            $file = $request->file('Transcript');
            $transcript_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$transcript_filename);
        }else

        {
            $transcript_filename = "";
        }
       
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Certificate')){
            $file = $request->file('Certificate');
            $cerificate_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$Certificate_filename);
        }else
        {
            $Certificate_filename = "";
        }
        
        $current_timestamp = Carbon::now()->timestamp;
        if($request->hasFile('Other_Doc')){
            $file = $request->file('Other_Doc');
            $other_doc_filename = $current_timestamp.$file->getClientOriginalName();
            $file->storeAs('public/',$other_doc_filename);
        }else
       
        {
            $Other_doc_filename = "";
        }
        $application = Application::create([
            'requestor_id' => Auth::user()->id,
            'applicant_first_name' => $request->applicant_first_name,
            'applicant_middle_name' => $request->applicant_first_name,
            'applicant_last_name' => $request->applicant_first_name,
            'grade_level'=> $request->grade_level,
            'birthday'=> $request->birthday,
            'country'=> $request->country,
            'address_line1'=> $request->address1,
            'address_line2'=> $request->address2,
            'guardian_name'=> $request->guardian_name,
            'guardian_type'=> $request->guardian_type,
            'application_type'=>$request->application_type, 
            'recipt'=>$reciept_filename,
            'transcript'=>$transcript_filename,
            'certificate'=>$certificate_filename,
            'other_doc'=>$other_doc_filename
        
        ]);

        
        $attributes['user_id'] = auth()->id();
      //  $attributes['Reciept'] = request()-> file('recipt') -> store('recipts');

        //Post :: creat($attributes);

        $application->save();
        
        return redirect('/dashboard');   
    }
}
