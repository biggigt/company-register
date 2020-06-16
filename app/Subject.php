<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_type','name', 'address', 'coate', 'inn', 'comment'];

    public function company(){
        return $this->hasOne('App\Company');
    }

    public function subject_types(){
        return $this->belongsTo('App\business_type','subject_type','id');
    }
}
