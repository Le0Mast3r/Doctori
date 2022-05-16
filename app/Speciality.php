<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = [
        'nom_speciality'
    ];
    public function doctor(){
        return $this->hasMany('App\Doctor');
    }

}
