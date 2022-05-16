<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <body>
 
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Remplir les informations suivantes</h2>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <select class="form-control" name="category_id" id="country">
                    <option selected="false">Choisir la spécialité</option>
                    @foreach($spc as $key => $sp)
                  <option value="{{$key}}"> {{$sp}}</option>
                  @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control" name="state" id="state">
                    <option selected="false">Choisir Docteur</option>
                </select>
                
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary rounded" type="submit" id="search" name="search">Search 
                    <i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Scripts -->
    <!-- Scripts -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
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
<script type="text/javascript">
    $("#search").on("click",function(){
        var link =document.getElementById("state").value;
        $.ajax({
            url:window.location.href="getData/"+link
        });
    });

</script>
</body>
</html>