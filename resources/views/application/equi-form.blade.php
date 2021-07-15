<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equivalency Form') }}
        </h2>
    </x-slot>

    <div class="container row mt-5">
        <div class="col-md-5">
            <center>
                {{ __('Enter Applicant Information.') }}
            </center>
        </div>
        <div class="col-md-1"></div>    
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg col-md-6" >

                                            <form class="p-3" action="{{ route('equivalency.store') }}"  method="POST"  enctype="multipart/form-data">
                                                @csrf
                                                    <input type="hidden" value="{{ Auth::user()->id }}" name="requestor_id" placeholder=" ">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">First Name</label>
                                                        <input type="text" class="form-control" name="applicant_first_name" placeholder=" ">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Middle Name</label>
                                                        <input type="text" class="form-control" name="applicant_middle_name" placeholder=" ">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Last Name</label>
                                                        <input type="text" class="form-control" name="applicant_last_name" placeholder=" ">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Grade level</label>
                                                        <input type="text" class="form-control" name="grade_level" placeholder=" ">
                                                    </fieldset>
                                                    <section id="pick-a-date">
                                                        <div class="mb-1">
                                                            <label for ="dateInput">Birth Date</label>
                                                            <fieldset class="form-group position-relative has-icon-left">
                                                                <input type="text" class="form-control pickadate" name ="birthday" placeholder="Select Date">
                                                                <div class="form-control-position">
                                                                    <i class='bx bx-calendar'></i>
                                                                </div>
                                                            </fieldset>
                                                        </div>  
                                                    </section>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Country</label>
                                                        <input type="text" class="form-control" name="country" placeholder=" ">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                    <label for="basicInput">State</label>
                                                    <input type="text" class="form-control" name="region" placeholder=" ">
                                                </fieldset>
												<fieldset class="form-group">
                                                    <label for="basicInput">Address Line1</label>
                                                    <input type="text" class="form-control" name="address1" placeholder=" ">
                                                </fieldset>
												<fieldset class="form-group">
                                                    <label for="basicInput">Address Line2</label>
                                                    <input type="text" class="form-control" name="address2" placeholder="Optional">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                        <label for="basicInput">guardian Name</label>
                                                        <input type="text" class="form-control" name="guardian_name" placeholder=" ">
                                                    </fieldset>
                                                    
                                                    <fieldset class="form-group">
                                                        <label for="helpInputTop">Guardian Relationship</label>
                                                        <select name="guardian_type" class="select2 form-control">
                                                            <option value="Father">Father</option>
                                                            <option value="Mother">Mother</option>
                                                            <option value="Sister">Sister</option>
                                                            <option value="Brother">Brother</option>
                                                            <option value="Uncle">Uncle</option>
                                                            <option value="Aunt">Aunt</option>
                                                            <option value="Grand Parent">Grand Parent</option>
                                                            <option value="Other relation">Other relation</option>
                                                        </select>
                                                    </fieldset>
                                                    <!-- <section id="input-file-browser">
                                                        <div class="mb-1">
                                                            <label class="documentInput">Upload Document</label>
                                                        </div>
                                                        <fieldset class="form-group">
                                                                <label for="basicInputFile">Payment Reciept</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Reciept</label>
                                                                </div>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">Transcript</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">certificate</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">Other Document</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </fieldset>
                                                    </section> -->
                                                    <input type="hidden" value="0" name="application_type">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <button type="submit" class="btn btn-lg btn-primary round m-1 w-auto">Submit</button>
                                                    </div>		
                                                </div>
                                            </form>
                                        
        </div>
    </div>
</x-app-layout>
