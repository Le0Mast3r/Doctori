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
            <form action="{{url('patient')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" value="Enregistrer" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection