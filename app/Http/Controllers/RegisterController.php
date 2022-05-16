<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Doctor;
use Auth;

class RegisterController extends Controller
{
    
    public function index(){
        return view('register-doctor');
    }
    public function store(){
        $data = Input::except(array('_token'));
        //var_dump($data);
        $rule = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'ville' => 'required',
            'adresse' => 'required',
            'file' => 'required',
           
            
        );
        $message=array(
            'confirm_password.required' => 'Le mot de passe de confirmation est requis',
            'confirm_password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'confirm_password.same' => 'Le mot de passe de confirmation et le mot de passe doivent être identiques',
        );
        $validator = Validator::make($data,$rule,$message);
        if($validator->fails()){
            return Redirect::to('inscrire-docteur')->withErrors($validator);
        }else{
            Doctor::formstore( Input::except(array('_token','confirm_password')));
           return Redirect::to('inscrire-docteur')->with('success','enregistré avec succès');
        }
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
            if(Auth::guard('doctor')->attempt(['email' => $request->email , 'password' => $request->password] )){
                
                //  return Redirect::to('/home');
                echo "true";
            }else{
                // return Redirect::to('identifier')
                echo "false";

            }
        }
    }
}
