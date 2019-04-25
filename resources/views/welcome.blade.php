@section('content')

<!DOCTYPE html>
<html lang="en" class="os-win">
<head>


<link rel="SHORTCUT ICON" href="img/favicon.ico">
<title>Wintec Internship Portal</title>


<!-- Leave these scripts alone! -->
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=3nuvxgwg15rbghxm1gpzfbya2-35e6ug1j754avohmn1bzmucat-mv3v66b8q0h1hvgvd3yfjv5f-14k913qahq3mh0ac0lh0twk9v-32xqc0bz5w6d3bouth6hj9ozu-b7ksroocq54owoz2fawjb292y-62og8s54488owngg0s7escdit-c8ha6zrgpgcni7poa5ctye7il-8gz32kphtrjyfula3jpu9q6wl-51dv6schthjydhvcv6rxvospp-e9rsfv7b5gx0bk0tln31dx3sq-2r5gveucqe4lsolc3n0oljsn1-8v2hz0euzy8m1tk5d6tfrn6j-3eh5zbf8m3976frnzqqz8r2md-1l6r5aklcrehj1n7wy2v08xoy-8zc7dy7k0uqxxso1zmcx40mxo-a7br995b5xb4ztral63cjods4-rftdnvfzuncra9644jbr38ht-8s85e76fq22lk42rfavbckpvb-39kuwv80yvqr74w4oe9bge0md-ejfdcbibyn0amjrpy1bw898cw-2ktfa1kftfo63s0zzwtqt9mf0-b0otj9zjsih2zu4s3gxjejik2-czstax4e6y68hymdvqxpwe5so-3g8gynfr7fip2svw23i5ixnw3"></script>
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=25kaepc6rgo1820ap1rglmzr4-c19zsujfl1pg46iqy33ubhqc5-8dsj0i05aa9so2un8dmci2gmx-ascppxxu6dqpt5sppka77kdt0-39o2kw4renyd4i8pt5n9x0qaz-9cttgd1ueltkur8cb164nt1vt-35b6d44bfxo2cvy5hbzc0zsgl-amjylk8w8039f2lwlov2e4nmc-47qp7uw3i5i1pqeovirlcc070-3qsk2peor188gw7gmh2irlhe5-78bwuml1uwwm9yb9sr3bw68qb-9xms7fd8xdfrly2skx89dmkyc-9undj1hjru2i7vjjlqtb52ho2-7vr4nuab43rzvy2pgq7yvvxjk"></script>
<link rel="stylesheet" type="text/css" href="https://static.licdn.com/scds/concat/common/css?h=cfsam81o5sp3cxb7m0hs933c4-9ggkv94hyv0l10e52p9dsrys6-4ncd0u6vg12e6jlww2oj1uzws-2qk68hrxrqya74okuimf9dv0c">
</head>



    <style>
        body {
              background-color:  #00a1f1;
              background-size: cover;
              background-repeat: no-repeat;  
            }
        }
    </style>

<body  id="random" onload="randombg()">

		<script>
		    function randombg(){
		  var random= Math.floor(Math.random() * 9) + 0;
		  var bigSize = ["url('img/hmeimgss/1.jpg')",
		                 "url('img/hmeimgss/2.jpg')",
		                 "url('img/hmeimgss/3.jpg')",
		                 "url('img/hmeimgss/4.jpg')",
		                 "url('img/hmeimgss/5.jpg')",
		                 "url('img/hmeimgss/6.jpg')",
		                 "url('img/hmeimgss/7.jpg')",
		                 "url('img/hmeimgss/8.jpg')",
		                 "url('img/hmeimgss/9.jpg')"];


		  document.getElementById("random").style.backgroundImage=bigSize[random];
		}
		</script>



	<input id="inSlowConfig" type="hidden" value="false"/>
	<script type="text/javascript">document.body.className+=" js ";</script>
	<script type="text/javascript">fs._server.fire("a3f3ff1a1f8c921340407b43db2a0000-2",{event:"before",type:"html"});</script>





		
		<div id="main" class="signin">
    	<form class="ajax-form stacked-form" method="POST" name="login" id="login" action="{{route('login')}} ">

			{{ csrf_field() }}

			<fieldset>
			<div class="outer-wrapper">
			<div class="inner-wrapper" style="background-color: #FFDD00;">
			                		 <img src="img/wintec black.png" style="width:390px;height:85px">

    		 <div style="margin-top: 20px;">
    		 	<h1 style="font-size:30px;">Wintec Internship Portal</h1>
	    		 <div style="margin-top:10px;"></div>
    		 	<h1 style="font-size:15px;font-weight: bold;">Please login with your wintec.ac.nz account</h1>

                <div style="margin-top:10px;" class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div style="margin-top:10px;" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div style="margin-top:10px;" class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                         <div style="margin-top:10px;" class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                            	<ul>
                            	<li class="button">	
                                		<button type="submit" class="btn btn-primary">
                                    		Login
                                		</button>
                        		</li>
                        	</ul>

                                <a class="btn btn-link" href="{{ route('register')}}">
                                    Register
                                </a><br/>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

    		 </div>



		</div>
	</div>
</fieldset>
</form>
</div>
</body>
<!-- Leave these scripts alone! -->
<script type="text/javascript">LI.Controls.processQueue();</script>
<script type="text/javascript">LI_WCT(["control-http-12157-58149-1","control-http-12157-58149-2","control-http-12157-58150-3","control-http-12157-58150-4","control-http-12157-58150-5",]);</script>
<script type="text/javascript">fs._server.fire("a3f3ff1a1f8c921340407b43db2a0000-3",{event:"before",type:"html"});</script>
</html>


			


					