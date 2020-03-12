<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HarmonizedSC extends Model
{
    protected $fillable = ['code','parent_code','hsc_name','description'];
}
