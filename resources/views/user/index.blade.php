@extends('layouts.admin-layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>La liste des Patients</h1>
            </div>
            
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        @if (session()->has('updated'))
            <div class="alert alert-success">
                {{session()->get('updated')}}
            </div>
        @endif
        <div class="pull-right">
        <a href="{{url('/patient/create')}}" class="btn btn-success fa fa-plus"></a>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email </th>
             <th>Password</th>
             <th></th>
             
            </tr>
            @foreach($user as $row)
            <tr>
             <td>{{$row['id']}}</td>
             <td>{{$row['name']}}</td>
             <td>{{$row['email']}}</td>
             <td>{{$row['password']}}</td>    
            <form action="{{url('patient/'.$row['id'])}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <td>
                    <a href="" class="btn btn-primary">Details</a>
                    <a href="{{url('patient/'.$row['id'].'/edit')}}" class="btn btn-info">Editer</a>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </td>
             </form>
            </tr>
            @endforeach
           </table>
    </div>
@endsection