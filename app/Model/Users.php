<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table        = 'users';
    protected $fillable     = ['name','email','profile_pic','about_me','dob','gender','blood_group','nationality','contact','occupation','address_line_one','address_line_two','country','state','city','zip','college','course','interest'];
}
