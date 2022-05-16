<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input ;
use Hash;
use App\File;
use App\Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{

    protected $table ="doctors";
    public static function formstore($data){
        $first_name=Input::get('first_name');
        $last_name=Input::get('last_name');
        $email=Input::get('email');
        $ville=Input::get('ville');
        $adresse=Input::get('adresse');
        $password=Hash::make(Input::get('password'));
        
        $doctor = new Doctor();
        $doctor->first_name=$first_name;
        $doctor->last_name=$last_name;
        $doctor->email=$email;
        $doctor->ville=$ville;
        $doctor->adresse=$adresse;
        $doctor->password=$password;

        if($request->hasFile('file')){
               
            
           $file=$request->file('file');
           $extension =$file->getClientOriginalName();
           $filename = time().".".$extension;
           $file->move('upload/images',$filename);
           $doctor->image=$filename;
            
        }
        
        $doctor->save();
    }
}
