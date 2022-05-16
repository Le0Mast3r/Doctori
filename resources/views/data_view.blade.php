@extends('layouts.master')
@section('content')

    
      @foreach ($data as $dt)
      <div class="card mb-3" style="max-width: 540*2px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{asset('upload/images/'.$dt->image)}}" class="Image " alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$dt->first_name}} {{$dt->last_name}}</h5>
              <p class="card-text">{{$dt->ville}} {{$dt->Adresse}}</p>
              <p class="card-text"><small class="text-muted">{{$dt->first_name}}</small></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach


@endsection