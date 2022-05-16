<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Input ;
use Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'first_name','last_name', 'email', 'password', 'id_speciality'
    ];
    public function __cunstruct(){
        $this->midleware('guest:doctor');
    }
    
    
    use Notifiable;
    // protected $guard = 'doctor';
    protected $table = 'doctors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function speciality(){
        return $this->belongsTo('App\Speciality');
    }
    // public static function formstore($data){
    //     $first_name=Input::get('first_name');
    //     $last_name=Input::get('last_name');
    //     $email=Input::get('email');
    //     $ville=Input::get('ville');
    //     $adresse=Input::get('adresse');
    //     $password=Hash::make(Input::get('password'));
        
        
    //     $users = new Doctor();
    //     $users->first_name=$first_name;
    //     $users->last_name=$last_name;
    //     $users->email=$email;
    //     $users->ville=$ville;
    //     $users->Adresse=$adresse;
    //     $users->password=$password;
    //     $users->save();
    // }
    // // public function store(request $request){
    // //     if($request->hasFile('file')){
    // //        $filename = $request->file->getClientOriginalName();
    // //         //$filesize =  $request->file->getClientSize();
    // //         $request->file->storeAs('public/upload',$filename);
    // //         $file = new File ;
    // //         $file->validation = $filename;
    // //         // $file->size = $filesize;
    // //         $file->save();
           
    // //     }
        
    // // }
   

}
