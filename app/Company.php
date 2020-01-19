<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['business_type','name', 'regnumber', 'facility_type', 'subject_acting', 'subject_owner'];
}
