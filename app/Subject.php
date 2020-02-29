<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_type','name', 'address', 'coate', 'inn', 'comment'];
}
