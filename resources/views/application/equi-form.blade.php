<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equivalency Form') }}
        </h2>
    </x-slot>

    <div class="container block mt-5">
        
              <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-auto col-md-10" >

                                             <form class="p-3" action="{{ route('equivalency.store') }}"  method="POST"  enctype="multipart/form-data">
                                                @csrf
                                                    <input type="hidden" value="{{ Auth::user()->id }}" name="requestor_id" placeholder=" ">
                                                    <div class="flex w-full justify-between gap-3">
                                                       <fieldset class="form-group w-50">
                                                        <label for="basicInput">First Name</label>
                                                        <x-jet-input type="text" class=" form-control" name="applicant_first_name" placeholder=" "/>
                                                         <x-jet-input-error for="applicant_first_name"/>
                                                        
                                                    </fieldset>
                                                    <fieldset class="form-group w-50">
                                                        <label for="basicInput">Middle Name</label>
                                                        <x-jet-input type="text" class="form-control  " name="applicant_middle_name" placeholder=" "/>
                                                        <x-jet-input-error for="applicant_middle_name"/>
                                                    </fieldset> 
                                                    <fieldset class="form-group w-50">
                                                        <label for="basicInput">Last Name</label>
                                                        <x-jet-input type="text" class="form-control  " name="applicant_last_name" placeholder=" "/>
                                                        <x-jet-input-error for="applicant_last_name"/>
                                                    </fieldset>
 
                                                    </div>
                                                    
                                                    <div class="flex gap-3 justify-between mt-2">
                                                        <fieldset class="form-group w-50">
                                                        <label for="basicInput">Grade level</label>
                                                        <x-jet-input type="number" class="form-control  " name="grade_level" placeholder=" "/>
                                                        <x-jet-input-error for="grade_level"/>
                                                    </fieldset>                                                          
                                                    <fieldset class="form-group w-50">
                                                        <label for ="basicInput">Birth Date</label>
                                                        <x-jet-input type="date" class="form-control  " name="birthday" placeholder=" "/>
                                                        <x-jet-input-error for="birthday"/>
                                                    </fieldset>
                                                    </div>
                                                    <div class="flex w-full justify-between gap-3 mt-2">
                                                        <fieldset class="form-group w-50">
                                                        <label for="basicInput">Country</label>
                                                        <x-jet-input type="text" class="form-control  " name="country" placeholder=" "/>
                                                        <x-jet-input-error for="country"/>
                                                    </fieldset>
                                                    <fieldset class="form-group w-50">
                                                        <label for="basicInput">Address-Line1</label>
                                                        <x-jet-input type="text" class="form-control  " name="Address-Line2" placeholder=" "/>
                                                        <x-jet-input-error for="region"/>
                                                    </fieldset>
                                                    <fieldset class="form-group w-50">
                                                        <label for="basicInput">Address-Line2</label>
                                                        <x-jet-input type="text" class="form-control  " name="Address-Line2" placeholder="Optional"/>
                                                        <x-jet-input-error for="zone"/>
                                                    </fieldset>
                                                    </div>

                                                    <div class="flex gap-3 justify-between mt-2">
                                                    <fieldset class="form-group w-50">
                                                        <label for="basicInput">Guardian Name</label>
                                                        <x-jet-input type="text" class="form-control  " name="guardian_name" placeholder=" "/>
                                                        <x-jet-input-error for="guardian_name"/>
                                                    </fieldset>
                                                    
                                                    <fieldset class="form-group w-50">
                                                        <label for="basicInput">Guardian Relationship</label>
                                                        <select name="guardian_type" class="select2  form-control">
                                                            <option value="Father">Father</option>
                                                            <option value="Mother">Mother</option>
                                                            <option value="Sister">Sister</option>
                                                            <option value="Brother">Brother</option>
                                                            <option value="Uncle">Uncle</option>
                                                            <option value="Aunt">Aunt</option>
                                                            <option value="Grand Parent">Grand Parent</option>
                                                            <option value="Other relation">Other relation</option>
                                                        </select>
                                                        <x-jet-input-error for="guardian_type"/>
                                                    </fieldset>

                                                    </div>
                                        
                                                    <div>
                                                    <div class="mb-1 mt-2">
                                                            <label class="documentInput">Upload Document</label>
                                                        </div>
                                                       <section id="input-file-browser" class="flex gap-3 justify-between">
                                                        
                                                        <fieldset class="form-group">
                                                                <label for="basicInputFile">Payment Reciept</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="Reciept" id="inputGroupFile01">
                                                                    <label class="custom-file-label" for="inputGroupFile01"></label>
                                                                </div>
                                                                <x-jet-input-error for="Reciept"/>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">Transcript</label>
                                                            <div class="custom-file">
                                                                <input type="file"  class="custom-file-input" name="Transcript" id="inputGroupFile02" accept="pdf/*"class="form-control  -file">
                                                                <label class="custom-file-label" for="inputGroupFile02"></label>
                                                            </div>
                                                            <x-jet-input-error for="Transcript"/>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">certificate</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="Certificate"id="inputGroupFile03">
                                                                <label class="custom-file-label" for="inputGroupFile01"></label>
                                                            </div>
                                                            <x-jet-input-error for="Certificate"/>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">Other Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="Other_Doc" id="inputGroupFile04">
                                                                <label class="custom-file-label" for="inputGroupFile01"></label>
                                                            </div>
                                                            <x-jet-input-error for="Other_Doc"/>
                                                        </fieldset>
                                                    </section>  
                                                    </div>
                                                    
                                                    <input type="hidden" value="0" name="application_type">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <x-jet-button type="submit" class="btn btn-lg btn-primary round m-1 w-auto">Submit</x-jet-button>
                                                    </div>		
                                                </div>
                                            </form>
                                        
        </div>
    </div>
</x-app-layout>
