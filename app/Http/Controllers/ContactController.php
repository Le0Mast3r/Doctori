<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact ;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function index(){
        $listContact = Contact::all();
        return view('contact.index',['contact'=>$listContact]);
    }
    public function create(){
        return view('contact.create');
    }
    public function store(ContactRequest $request){
        $contact = new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->message=$request->input('message');
        $contact->save();
        session()->flash('success','Les informations à été bien enregistré!!');
       return redirect('contact');
    }
    public function edit($id){
        $contact =Contact::find($id);
        return view('contact.edit',['contact'=>$contact]);
    }
    public function update($id,ContactRequest $request){
        $contact =Contact::find($id);
        $contact->name =$request->input('name');
        $contact->email =$request->input('email');
        $contact->message =$request->input('message');
        $contact->save();
        session()->flash('updated','Les informations à été bien modifiée!!');
        return redirect('contact');

    }
    public function destroy($id,Request $request){
        $contact =Contact::find($id);
        $contact->delete();
        return redirect('contact');
    }
}
