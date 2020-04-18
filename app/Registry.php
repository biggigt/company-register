<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    protected $fillable = ['registryTypeId','companyId'];
    public function company(){
        return $this->hasOne('App\Company','id','companyId');
    }
    public function registry(){
        return $this->hasOne('App\RegistryType','id','registryTypeId');
    }
    public function registry_hsc(){
        return $this->hasMany('App\CompanyInRegistryHarmonizedCode','registries_id','id');
    }

}
