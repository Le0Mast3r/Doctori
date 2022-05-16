<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor ;
use App\Speciality ;
use DB;
class SearchController extends Controller
{
    public function index()
    {
        $spc = DB::table("specialities")->pluck("nom_speciality","id");
        return view('search',compact('spc'));
    }

    public function getStateList(Request $request)
    {
        $states = DB::table("doctors")
        ->where("id_speciality",$request->id_speciality)
        ->pluck("etat","id");
        return response()->json($states);
    }

    public function getData($id){
        $data = Doctor::where("id_speciality",$id)->get();
        return view('data_view',compact('data'));
    }
}
