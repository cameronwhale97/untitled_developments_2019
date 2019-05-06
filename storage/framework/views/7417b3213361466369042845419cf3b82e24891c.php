<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Boss Cuts Barbershop -  Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Include this after the sweet alert js file -->
    <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    						<?php if(session()->has('alert')): ?>
						
						         
                    						  
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
                        
                        <audio  autoplay>
                                  <source src="audio/applepay.mp3" type="audio/mp3" >
                        </audio>
        
        
                            
                        <?php endif; ?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(url('/dashboard')); ?>">
        <div class="sidebar-brand-icon">
          <img src="img/bosscuts.png" width="32" height="32">
        </div>
        
        <div class="sidebar-brand-text mx-3">Boss Cuts Barbershop</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Staff
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Rostering</span>
        </a>
        
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">View Rosters</a>
            <a class="collapse-item" href="#">Create/Edit Rosters</a>
          </div>
        </div>
      </li>
      
      
    <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Bookings
        </div>
      <!-- Nav Item - Utilities Collapse Menu -->   
     <li class="nav-item">
     
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#bookingsModal" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-plus"></i>
          <span>Add New Booking</span>
        </a>
        
     
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseX" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-book"></i>
          <span>Management</span>
          
        </a>
        
        <div id="collapseX" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo e(url('/bookings')); ?>">View Bookings</a>
            <a class="collapse-item" href="#">Generate Report</a>
          </div>
        </div>
      </li>

      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
     
      
 

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?><br><?php echo e(Auth::user()->email); ?></span>

                
                <!--<img class="img-profile rounded-circle" src="uploads/avatars/default.jpg">-->
                <img class="img-profile rounded-circle" src="img/bosscuts.png">
                
                
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Client Bookings for Boss Cuts</h1>
            
            
            <a href="#" data-toggle="modal" data-target="#myModal" 
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
            
                          <!-- Bookings Modal -->
        <div id="bookingsModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Create New Booking</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
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
              
              
            
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        
          </div>
        </div>
            
            <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Alert</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                <p>This function is not available just yet</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        
          </div>
        </div>
        </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Client Bookings</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Client Name</th>
                      <th>Client Email</th>
                      <th>Client Phone Number</th>
                      <th>Chosen Service</th>
                      <th>Staff Member</th>
                      <th>Chosen Date</th>
                      <th>Chosen Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $bk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        				<tr>
        				<td><?php echo e($post->clientname); ?></td>
        				<td><?php echo e($post->clientemail); ?></td>
        				<td><?php echo e($post->clientphone); ?></td>
        				<td><?php echo e($post->chosenservice); ?></td>
        				<td><?php echo e($post->staffmember); ?></td>
        				<td><?php echo e($post->chosendate); ?></td>
        				<td><?php echo e($post->chosentime); ?></td>
        				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Boss Cuts Barbershop 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo e(url('/logout')); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
