<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['business_type','name', 'regnumber', 'facility_type', 'address', 'subject_acting', 'subject_owner'];

    public function subject_actings(){
        return $this->hasOne('App\Subject','id','subject_acting');
    }

    public function subject_owners(){
        return $this->hasOne('App\Subject','id','subject_acting');
    }

    public function business_types(){
        return $this->belongsTo('App\business_type','business_type','id');
    }

    public function facility_types(){
        return $this->belongsTo('App\facility_type','facility_type','id');
    }
}
