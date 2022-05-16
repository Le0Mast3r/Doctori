<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Doctor;
use App\Speciality;
use Auth;
use Hash;
use App\File;
use App\Illuminate\Http\UploadedFile;

class DoctorRegisterController extends Controller
{
    public function __cunstruct(){
        $this->midleware('guest:doctor',['except'=>['logout']]);
    }
    
    public function index(){
        return view('register-doctor');
    }
    public function doctorLogin(){
        return view('login-doctors');
    }
    public function store(request $request){
        $data = Input::except(array('_token'));
        //var_dump($data);
        $rule = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'validation' =>'required',
            'ville' => 'required',
            'adresse' => 'required',
            'speciality' => 'required',
             'file' => ['required', 'image','mimes:jpg,jpeg,bmp,svg,png'],
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        );
        $message=array(
            
            'confirm_password.required' => 'Le mot de passe de confirmation est requis',
            'confirm_password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'confirm_password.same' => 'Le mot de passe de confirmation et le mot de passe doivent être identiques',
        );
        $users = new Doctor();
        $users->first_name=$request->input('first_name');
        $users->last_name=$request->input('last_name');
        $users->email=$request->input('email');
        $users->password=Hash::make($request->input('password'));
        $users->ville=$request->input('ville');
        $users->Adresse=$request->input('adresse');
        $spc = new Speciality();
        $spc->nom_speciality=$request->input('speciality');
        // $users->doctor->nom_speciality=$request->input('speciality');

        // $users->validation=$request->file->store('file');
      
            if($request->hasFile('file')){
               
                //$filename = $request->file->getClientOriginalName();
                //$filesize =  $request->file->getClientSize();
                // $request->file->storeAs('public/images',$filename);
               $file=$request->file('file');
               $extension =$file->getClientOriginalName();
               $filename = time().".".$extension;
               $file->move('upload/images',$filename);
               $users->image=$filename;
                
                
               
        
            
            }
            if($request->hasFile('validation')){
               
                //$filename = $request->file->getClientOriginalName();
                //$filesize =  $request->file->getClientSize();
                // $request->file->storeAs('public/images',$filename);
               $file=$request->file('validation');
               $extension =$file->getClientOriginalName();
               $filename = time().".".$extension;
               $file->move('upload/validation',$filename);
               $users->validation=$filename;
                
                
               
        
            
            }
            $users->save();
            return Redirect::to('identifier-docteur')->with('success','enregistré avec succès');




        // $validator = Validator::make($data,$rule,$message);
        // if($validator->fails()){
        //     return Redirect::to('inscrire-docteur')->withErrors($validator);
        // }else{
        //    Doctor::formstore( Input::except(array('_token','confirm_password')));
        //    return Redirect::to('inscrire-docteur')->with('success','enregistré avec succès');
        // }
    }
    public function login(Request $request){
       $data = Input::except(array('_token'));
        //var_dump($data);
        $rule = array(
            'email' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make($data,$rule);
        if($validator->fails()){
            return Redirect::to('identifier-doctor')->withErrors($validator);
        }else{
            $data = Input::except(array('_token'));
            // var_dump($data);
            if(Auth::guard('doctor')->attempt(['email' => $request->email , 'password' => $request->password, 'etat' => $request->etat==0] )){
                return Redirect::to('docteur-accueil');
                
            }else if(Auth::guard('doctor')->attempt(['email' => $request->email , 'password' => $request->password, 'etat' => $request->etat!=0] )){
                return Redirect::to('docteur-non-verifie');
            }
            else{
                return Redirect::to('identifier-docteur');
                
            }
        }
    }
    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect('/');
    }
   

}
