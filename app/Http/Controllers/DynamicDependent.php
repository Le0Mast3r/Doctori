<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DynamicDependent extends Controller
{
    
        public function index()
        {
            $countries = DB::table("specialities")->pluck("nom_speciality","id");
            return view('dynaprendmic_dependent',compact('countries'));
        }

        public function getStateList(Request $request)
        {
            $states = DB::table("doctors")
            ->where("id_speciality",$request->id_speciality)
            
            // ->select('ville', DB::raw('count(*) as total'))
            // ->groupBy('ville')
            ->pluck("ville","id");
            
            

            return response()->json($states);
        }

        public function getCityList(Request $request)
        {
            $cities = DB::table("doctors")
            
            ->where("id_speciality",$request->id_speciality)
            ->select("id", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->pluck('name',"id");
            return response()->json($cities);
        }
}
