@extends('layouts.user-layout')
@section('content')
<div class="row">
    <div class="col-md-12">
     <br />
     <h3 align="center">Mes Rdv</h3>
     <br />
     @if($message = Session::get('success'))
     <div class="alert alert-success">
      <p>{{$message}}</p>
     </div>
     @endif
     
     <table class="table table-bordered table-striped">
      <tr>
       <th>Id</th>
       <th>Title</th>
       <th>Date Depar</th>
       <th>Date Fin</th>
       
      </tr>
      @foreach($event as $row)
      <tr>
       <td>{{$row['id']}}</td>
       <td>{{$row['title']}}</td>
       <td>{{$row['dateDepart']}}</td>
       <td>{{$row['dateFin']}}</td>
       
       
      </tr>
      @endforeach
     </table>
    </div>
   </div>
@endsection