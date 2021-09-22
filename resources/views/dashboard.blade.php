<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Application Type</th>
                    <th scope="col">Applicant Full Name</th>
                    <th scope="col">Grade Level</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Guardian Name</th>
                    <th scope="col">Guardian Relationship</th>
                    <th scope="col">Address</th>
                    <th scope="col">Applicant Documents</th>
                    <th scope="col">Application Progress</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $application)
                    <tr>
                        <td>
                            @if($application->application_type==0)
                                <span>Authentication</span>
                            @else
                                <span>Equivalency</span>
                            @endif    
                        </td>
                        <td>    
                            <span> {{ $application->applicant_first_name }} {{ $application->applicant_middle_name }} {{ $application->applicant_last_name }} </span>
                        </td>
                        <td>
                        {{ $application->grade_level }}
                        </td>
                        <td>
                        {{ $application->birthday }}
                        </td>
                        <td>
                        {{ $application->guardian_name }}
                        </td>
                        <td>
                        {{ $application->guardian_type }}
                        </td>
                        <td>
                        {{ $application-> country}} {{ $application->region }} {{ $application->zone }}
                        </td>
                        <td>
                        {{ $application-> recipt}} {{ $application->transcript}} {{ $application->certificate }} 
                        </td>
                        <td>
                            0%
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
</x-app-layout>
