{{-- @extends('layouts.app') --}}
@extends('layouts.user-layout')
@section('content')
	<h1>Hello</h1>
	@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session::get('success')}}
  </div>
@endif
@endsection
