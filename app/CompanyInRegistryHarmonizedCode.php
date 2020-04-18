<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInRegistryHarmonizedCode extends Model
{
    protected $fillable = ['registries_id','harmonizedsc_id','activity_types'];
    public function status(){
        return $this->hasMany('App\CompanyInRegistryStatus');
    }
    public function registry_record(){
        return $this->belongsTo('App\Registry','id','registries_id');
    }
}
