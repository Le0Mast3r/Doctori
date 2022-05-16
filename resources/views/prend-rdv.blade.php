@extends('layouts.user-layout')
@section('content')
<div class="container">
    <div class="panel panel-default" style="width:1040px;">
      <div class="panel-heading">Remplir les information suivantes</div>
      <div class="panel-body">
        <form method="post" action="{{ action('ViewsController@enregistrer') }}">

            {{ csrf_field() }}
            <div class="form-group">
                <select id="country" name="category_id" class="form-control" style="width:1000px;" >
                <option value="" selected disabled>Select</option>
                  @foreach($countries as $key => $country)
                  <option value="{{$key}}"> {{$country}}</option>
                  @endforeach
                  </select>
            </div>
            <div class="form-group">
                <label for="title">Choisir la Ville</label>
                <select name="state" id="state" class="form-control" style="width:1000px;" >
                </select>
            </div>
         
            <div class="form-group">
                <label for="title">Le Nom de Docteur</label>
                <select name="city" id="city" class="form-control" style="width:1000px;">
                </select> 
            </div>
            <div class="form-group">
                <label for="title">Entrer Votre Nom </label>
               <input type="text" name="title" id="title"  class="form-control" style="width:1000px;"> 
               
            </div>
            <div class="form-group">
                <label for="date">Entrer la date</label>
               <input type="datetime-local" name="date" id="date"  class="form-control" style="width:1000px;"> 
               
            </div>
            {{-- <div class="form-group">
                <label for="title">Entrer la time</label>
               <input type="time" name="time" id="time"  class="form-control" style="width:1000px;"> 
               
            </div> --}}
            <div class="form-group">
                <label for="date">Entrer la date fin</label>
               <input type="datetime-local" name="dateFin" id="dateFin"  class="form-control" style="width:1000px;"> 
               
            </div>
            <button class="btn btn-info">Submit</button>
        </form>
        
      </div>
    </div>
    
</div>


<script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?id_speciality="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?id_speciality="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>
@endsection