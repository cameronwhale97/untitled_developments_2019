  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">

    <title>Boss Cuts Barbershop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}"><img src="img/bosscuts.png"  height="32" width="32">&nbsp; Boss Cuts Barbershop</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">


          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('/logon')}}"><i class="fas fa-lock"></i>&nbsp;Login</a>
          </li>

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">

                <br>
        <br>

        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      
<div id="main" class="signin">
    	<form class="ajax-form stacked-form" method="POST" name="login" id="login" action="{{route('login')}} ">

			{{ csrf_field() }}

			<fieldset>
			<div class="outer-wrapper">

    		 <div style="margin-top: 20px;">
    		 	<h1 style="font-size:30px;">Boss Cuts Barbershop</h1>
    		 	<h1 style="font-size:15px;font-weight: bold;">Please login with your staff account</h1>

	    		 <div style="margin-top:10px;"></div>
    		 	

    		 	<br>

                <div style="margin-top:10px;" class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        <br>

                        <div style="margin-top:10px;" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div style="margin-top:10px;" class="form-group">
                            <div style="margin-left:20px;" class="col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                         <div style="margin-top:11px;" class="form-group">
                            <div style="margin-left:20px;" class="col-md-10">
                                <button style="width:180px" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                        
                        
                        <style>
                        .alert {
                               width:900px;    
                               margin-left:-250px;
                            }
                        </style>
    		 	<div class="alert alert-warning" role="alert">
                    <h1 style="font-size:15px;"><strong>Notice:</strong> This login is for employees from Boss Cuts Barbershop<br><br>If you came here by mistake, click <a href="{{url('/')}}">here</a> to go back home</h1>

    		 	</div>

                        	

                            <!--
                                <a class="btn btn-link" href="{{ route('register')}}">
                                    Register
                                </a><br/>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>

    		 </div>




	</div>
</fieldset>
</form>
</div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
