<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use DB;
use Auth;
use Redirect;
use Validator;
class ViewsController extends Controller
{
    public function index(){
        return view('index');
    }
    public function faq(){
        return view('faq');
    }
    public function registerDoctor(){
        return view('register-doctor');
    }
    public function chercher(){
        return view('search');
    }
    // public function prendRdv(){
    //     return view('prend-rdv');
    // }
        public function index1()
        {
            $countries = DB::table("specialities")->pluck("nom_speciality","id");
            return view('prend-rdv',compact('countries'));
        }

        public function getVille(Request $request)
        {
            $states = DB::table("doctors")
            ->where("id_speciality",$request->id_speciality)
            
            // ->select('ville', DB::raw('count(*) as total'))
            // ->groupBy('ville')
            ->pluck("ville","id");
            
            

            return response()->json($states);
        }

        public function getNom(Request $request)
        {
            $cities = DB::table("doctors")
            
            ->where("id_speciality",$request->id_speciality)
            ->select("id", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->pluck('name',"id");
            return response()->json($cities);
        }
    public function enregistrer(request $request){
        $event = new Evenement();
        $event->dateDepart=request('date');
        $event->title=request('title');
        $event->dateFin=request('dateFin');
        $event->id_user=Auth::user()->id;
        // $event->id_user=Auth::user()->id;
        $event->save();
        return Redirect::to('home')->with('success','Votre Rendez-vous a été bien éffectué');
    }
    public function showDataEvent(){
        $event=Evenement::where('id_user',Auth::user()->id)->get()->toArray(); 
        return view('mes-rdv',compact('event'));
    }
    public function docteurAccueil(){
        return view('doctor-dashboard');
    }
    public function doctorNotVerified(){
        return view('doctor-not-verified');
    }
    public function calendarEvenement()
    {
       $events =Evenement::all();
       $event=[];
       foreach ($events as $row) {
           $enddate =$row->dateFin."24:00:00";
           $event[]=Calendar::event(
               $row->title,
               false,
               new \DateTime($row->dateDepart),
               new \DateTime($row->dateFin),
               
               $row->id
           );
       }
       $calendar=\Calendar::addEvents($event);
       return view('calendar',compact('events','calendar'));
    
    
    }

        
    
}
