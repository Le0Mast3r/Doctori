<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $fillable = ['email','name','message'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
