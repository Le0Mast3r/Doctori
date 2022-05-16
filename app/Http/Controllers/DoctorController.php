<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor ;
use App\Http\Requests\DoctorRequest;
use Hash;
class DoctorController extends Controller
{
    public function index(){
        $listDoctor = Doctor::all();
        return view('doctor.index',['doctor'=>$listDoctor]);
    }
    public function create(){
        return view('doctor.create');
    }
    public function store(DoctorRequest $request){
        $doctor = new Doctor();
        $doctor->name=$request->input('name');
        $doctor->email=$request->input('email');
        $doctor->password=Hash::make($request->input('password'));
        $doctor->save();
        session()->flash('success','Les informations à été bien enregistré!!');
       return redirect('docteur');
    }
    public function edit($id){
        $doctor =Doctor::find($id);
        return view('doctor.edit',['doctor'=>$doctor]);
    }
    public function update($id,DoctorRequest $request){
        $doctor =Doctor::find($id);
        $doctor->name =$request->input('name');
        $doctor->email =$request->input('email');
        $doctor->password=Hash::make($request->input('password'));
        $doctor->save();
        session()->flash('updated','Les informations à été bien modifiée!!');
        return redirect('docteur');

    }
    public function destroy($id,Request $request){
        $doctor =Doctor::find($id);
        $doctor->delete();
        return redirect('docteur');
    }
}
