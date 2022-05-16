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
            <form action="{{url('docteur')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Prenom:</label>
                    <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nom:</label>
                    <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Ville:</label>
                        <input type="text" name="ville" class="form-control" value="{{old('ville')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Adresse:</label>
                        <input type="text" name="adress" class="form-control" value="{{old('Adresse')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Etat:</label>
                        <input type="number" name="validation" min="0" max="1" value="{{old('Adresse')}}">
                    </div>
                    <div class="form-group">
                        <label for=""> Validation:</label>
                        <input type="file" class="form-control" name="validation" id="validation" >
                    </div>   
                    <div class="form-group">
                        <label for="file">Image:</label>
                        <input type="file" class="form-control" name="file" id="file" >
                    </div>  
                    
                    
                    <div class="form-group">
                        
                        <input type="submit" value="Enregistrer" class="form-control btn btn-primary col-md-1">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection