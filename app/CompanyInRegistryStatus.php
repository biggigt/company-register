<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInRegistryStatus extends Model
{
    protected $fillable = ['registries_id','statuses_id','countries_id','act','state','c_date'];
}
