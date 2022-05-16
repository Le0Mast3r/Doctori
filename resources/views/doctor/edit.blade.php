@extends('layouts.admin-layout')
@section('content')
@if (count($errors))
    <div class="alert alert-danger" role="alert">
         <ul>
             @foreach ($errors->all() as $message)
                   <li>{{$message}}</li>
             @endforeach
         </ul>
    </div>
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="{{url('contact/'.$contact->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$contact->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{$contact->email}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Message:</label>
                        <textarea name="message" class="form-control" >{{$contact->message}}</textarea>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" value="Enregistrer" class="form-control btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection