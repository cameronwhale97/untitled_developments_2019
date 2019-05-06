<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
	<title>Boss Cuts Barbershop - Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	
	<!-- Bootstrap -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	
	    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    
    
    

<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Include this after the sweet alert js file -->
    <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/bosscuts.png"  height="32" width="32">&nbsp; Boss Cuts Barbershop</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>

          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo e(url('/logon')); ?>"><i class="fas fa-lock"></i>&nbsp;Login</a>
          </li>

          </ul>
        </div>
      </div>
    </nav>

<style>
#booking{

  padding-top: 10rem;
  padding-bottom: calc(10rem - 56px);
  background-image: url("../img/header.jpg");
  background-position: center center;
  background-size: cover;
  }
</style>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1 style="font-size:45px;text-transform:none;">Book with Bosscuts</h1>
							
						<?php if(session()->has('alert')): ?>
						
						         <audio  autoplay>
                                  <source src="audio/applepay.mp3" type="audio/mp3" >
                                </audio>
                    						  
                            <script> //sweet alerts
                            
                            var content = document.createElement('div');
                                      content.innerHTML = '<strong> Booking Successful'+ '\n' + 'Check your email for more information </strong>';
                            swal({
                           title: "Booking Successful",
                           content:content,
                           //text: "Booking Successful" + "\n" +"Check your email for more information",
                           icon: "success",
                            });
                        </script>
        
        
                            
                        <?php endif; ?>
						</div>


						<form method="POST" action="/book/store" accept-charset="UTF-8" enctype="multipart/form-data">
						
						<?php echo e(csrf_field()); ?>


							<div class="row">
								<div class="col-sm-12"> 
									<div class="form-group">
										<span class="form-label">Name</span>
										<input name="clientname" class="form-control" type="text" placeholder="Enter your name">
									</div>
								</div>
															
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input name="clientphone" class="form-control" type="tel" placeholder="Enter your phone number">
							</div>
							
                            
    							<div class="form-group">
    								<span class="form-label">Email</span>
    								<input name="clientemail" class="form-control" type="text" placeholder="Enter your email">
    							</div>


<!-- break -->
								
							
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Service</span>
												<select name="chosenservice" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Combo 1</option>
													<option>Combo 2</option>
													<option>Combo 3</option>
													
												</select>
												<span class="select-arrow"></span>
									</div>
									
									
								</div>
								
								<div class="col-sm-6">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<span class="form-label">Staff Member</span>
												<select name="staffmember" class="form-control">
													<option>Staff Member 1</option>
													<option>Staff Member 2</option>
													<option>Staff Member 3</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										
		
									</div>
								</div>
								
								
								
								
							</div>
							
							<!-- break -->
							<div class="row">
								<div class="col-sm-6">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<span class="form-label">Date</span>
												  <input name="chosendate" type="date" class="form-control">
											</div>
										</div>
										
		
									</div>
								</div>
								
								
								
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Time</span>
												<select name="chosentime" class="form-control">
													<option selected="true" disabled="disabled">AM Times</option>
                                                    <option>09:00</option>
                                                    <option>09:30</option>
                                                    
                                                    <option>10:00</option>
                                                    <option>10:30</option>
                                                    
                                                    <option>11:00</option>
                                                    <option>11:30</option>
                                                    
													<option disabled="disabled">PM Times</option>
													
                                                    <option>12:00</option>
                                                    <option>12:30</option>
                                                    
                                                    <option>13:00</option>
                                                    <option>13:30</option>
                                                    
                                                    <option>14:00</option>
                                                    <option>14:30</option>
                                                    
                                                    <option>15:00</option>
                                                    <option>15:30</option>
                                                    
                                                    <option>16:00</option>
                                                    
													<option disabled="disabled">Last time of the day</option>
                                                    <option>16:30</option>


	
													
												</select>
												<span class="select-arrow"></span>
									</div>
								</div>
								
							</div>
							
							
							<!-- break -->
							
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>



</html>