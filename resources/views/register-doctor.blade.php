
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Créer Un Compte Sur Doctori</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #e8bed9;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				
            @endforeach
		</ul>
		
    </div>
@endif
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session::get('success')}}
  </div>
@endif
<div class="signup-form">
	<form action="doctor_action" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<h2>|S'inscrire | </h2>
		<p class="hint-text">Espace de Médecin | Créez votre compte. C'est gratuit et ne prend qu'une minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="Prénom" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Nom de famille
					" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de Passe" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirmer le Mot de Passe" required="required">
		</div>
		<div class="form-group">
        	<input type="text" class="form-control" name="ville" placeholder="Ville" required="required">
        </div>   
		<div class="form-group">
        	<input type="text" class="form-control" name="adresse" placeholder="Adresse" required="required">
		</div>
		<div class="form-group">
        	<input type="text" class="form-control" name="speciality" placeholder="Speciality" required="required">
        </div>   
        <div class="form-group">
            <sub><label for="file">Entrer une Image valid</label></sub>
            <input type="file" class="form-control" name="file" id="file" >
		</div>  
		<div class="form-group">
            <sub><label for="validation">Entrer une Validation(Copie de diplome par exemple...)</label></sub>
            <input type="file" class="form-control" name="validation" id="validation" >
        </div>     
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> J'accepte le
				<a href="#">Conditions d'utilisation</a> &amp; <a href="#">
					Politique de confidentialité</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">
		Vous avez déjà un compte?  <a href="#">Se connecter</a></div>
</div>
</body>
</html>