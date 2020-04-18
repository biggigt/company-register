<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInRegistryStatus extends Model
{
    protected $fillable = ['registries_hsc_id','statuses_id','countries_id','act','state','c_date'];
    public function registry_hsc()
    {
        return $this->belongsTo('App\CompanyInRegistryHarmonizedCode','id','registries_hsc_id');
    }
    public function status_name(){
        return $this->hasOne('App\status','id','statuses_id');
    }
}
