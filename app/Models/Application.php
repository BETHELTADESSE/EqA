<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'requestor_id',
        'applicant_first_name',
        'applicant_middle_name',
        'applicant_last_name',
        'birthday',
        'grade_level',
        'guardian_name',
        'guardian_type',
        'country',
        'region',
        'zone',
        'address1',
        'address2',
        'application_type',
        'postal_code',
        'recipt',
        'transcript',
        'certificate',
        'other_documents'

    ];
    // public function file(){

    //    $this->hasMany('App\File');
    // }
}
