<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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
