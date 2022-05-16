<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use App\Http\Requests\UserRequest;
use Hash;
class UserController extends Controller
{
    public function index(){
        $listUser = User::all();
        return view('user.index',['user'=>$listUser]);
    }
    public function create(){
        return view('user.create');
    }
    public function store(UserRequest $request){
        $user = new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        session()->flash('success','Les informations à été bien enregistré!!');
       return redirect('patient');
    }
    public function edit($id){
        $user =User::find($id);
        return view('user.edit',['user'=>$user]);
    }
    public function update($id,UserRequest $request){
        $user =User::find($id);
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        session()->flash('updated','Les informations à été bien modifiée!!');
        return redirect('patient');

    }
    public function destroy($id,Request $request){
        $user =User::find($id);
        $user->delete();
        return redirect('patient');
    }
}
