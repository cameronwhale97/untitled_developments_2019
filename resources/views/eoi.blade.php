<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Wintec Internship Portal</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
<script src='https://www.google.com/recaptcha/api.js'></script>

         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>






        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style4.css">
    </head>
    <body>

            <style>
                   body{
                      background: url('img/wintec.png') no-repeat center center fixed;
                      background-size: 100% 100%;

                    }
            </style>



            <!-- Page Content Holder -->
<div class="wrapper">
            <!-- Sidebar Holder -->
<nav id="sidebar">
                <div id="sidebarCollapse" class="sidebar-header">
                    <h3><img id="sidebarCollapse" style="margin-left:-14px" src="img/wintec3x6.png"></h3>
                    <strong><img style="margin-left:-10px" src="img/winteclogo.png"></strong>
                </div>

                 <ul class="list-unstyled components">
                     
                    
                        <li class="active">
                        <a href="{{ url('/dashboard') }}">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/myprofile') }}">
                            <i class="glyphicon glyphicon-user"></i>
                            My Profile
                        </a>
                    </li>

                    
                        <li>
                            <a href="{{ url('/mymail') }}">
                            <i class="glyphicon glyphicon-envelope"></i>
                            My Mail&nbsp;(&nbsp;
                            
                                <?php
                               use App\Message;

                               echo Message::where('AccountId', Auth::id())
                                            ->Where('Read', 0)
                                            ->get()
                                            ->count();

                            ?>&nbsp;)
                        </a>
                    </li>

  
                </ul>

                <ul class="list-unstyled components">

                    <li>
                        <a href="{{ url('/opportunities') }}">
                            <i class="glyphicon glyphicon-education"></i>
                            Opportunities 
                        </a>
                    </li>

                     <li>
                        <a href="{{ url('/eoi') }}">
                            <i class="glyphicon glyphicon-pencil"></i>
                            Expression Of Interest 
                        </a>
                    </li>

                     <li>
                        <a href="{{ url('/intport') }}">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Internship Portfolio
                        </a>
                    </li>

                </ul>

                <ul class="list-unstyled components">

                     <li>
                        <a href="{{ url('/changepass') }}">
                            <i class="glyphicon glyphicon-lock"></i>
                            Change Password
                        </a>
                    </li>



                     <li>
                        <a href="http://intern-portal-cwhale.c9users.io/logout"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                                        <i class="glyphicon glyphicon-log-out"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="http://intern-portal-cwhale.c9users.io/logout" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        </form>
                    </li>
                </ul>
            </nav>


            <!-- Page Content Holder -->
            <div id="content">
                
                <h1>My Expressions of Interest</h1><br/>
                <h3>Below are your current expressions of interest in a particular opportunity.</h3>
                <h3>Please submit three or more in the event that your first choice is not accepted.</h3><br/>
                
                <table class="form-table">
                    <tr>
                        <td><h4>Name of Host</h4></td>
                        <td><h4>Name of Opportunity Role</h4>
                        <td><h4>Status of Application</h4></td></td>
                    </tr>
                    <?php
                        foreach($expressions as $expression)
                        {
                            echo "<tr>";
                            
                                
                            // Get the opportunity associated with this expression
                            $opportunity = $opportunities->where('OpportunityId', $expression->OpportunityId)->first();
                            
                            echo "<td><span>$opportunity->HostName</span></td>";
                            echo "<td><span>$opportunity->OpportunityName</span></td><td>";
                            
                            if($expression->Approved)
                                echo "<span style=\"color:green\">Approved</span>";
                            else
                                echo "<span style=\"color:yellow\">Pending</span>";
                            echo "</td></tr>";
                        }
                    ?>
                </table>
                <hr>
                
        <!--<h2 style="color:white;">Expression of Interest Form.</h2>
  
        <p style="color:white;">If you wish to express interest in another Internship, Project, or Placement that is not listed, fill out the form below.</p>
        <p style="color:white;">A member of staff will be in touch with you within 48 hours, regarding your Expression of Interest.</p>
            <div class="line"></div>
            
            <div class="container">
              <div class="row">
                <div style="margin-left:-15px;" class="col-xl-12">
                    <form style="color:white">
                        
                         <h3 style="margin-top:-15px;margin-left:15px;color:white;">Your Information</h3>
                      <br>
                      <div class="form-row">
                          
                        <div class="form-group col-md-3">
                          <label for="FullName">Full Name</label>
                          <input type="text" class="form-control" id="FullName" value={{ Auth::user()->name }} required>
                        </div>
                        
                        <div class="form-group col-md-3">
                          <label for="StuEmail">Student Email</label>
                          <input type="email" class="form-control" id="StuEmail" value={{ Auth::user()->email }} required>
                        </div>
                        
                        <div class="form-group col-md-3">
                          <label for="StuID">Student ID</label>
                          <input type="number" class="form-control" id="StuID" placeholder="12345678" required>
                        </div>
                        
                        <div class="form-group col-md-3">
                          <label for="StuMobNum">Mobile Number</label>
                          <input type="number" class="form-control" id="StuMobNum" placeholder="021 123 45678" required>
                        </div>
                        
                    <div class="form-group col-md-4">
                      <label for="StuConMethod">Prefered Contact Method</label>
                      <select id="StuConMethod" class="form-control" required>
                        <option selected>Email</option>
                        <option>Phone</option>
                        <option>No Preference</option>
                      </select>
                    </div>
                        
                      </div>
                      
                      <br><br><br><br><br><br><br><br>

                      <h3 style="margin-left:15px;color:white;">Opportunity Information</h3>
                      <br>
                      

                    
                    
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="StuOpType">Opportunity Type</label>
                      <select id="StuOpType" class="form-control" required>
                        <option selected>Internship</option>
                        <option>Project</option>
                        <option>Placement</option>
                       <option>No Preference</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="StuTimeFrame">Timeframe</label>
                      <select id="StuTimeFrame" class="form-control" required>
                        <option selected>Semester 1 (Feb-Jun)</option>
                        <option>Semester 2 (Jul-Nov)</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                  
                  
                  
                  
                  <div class="form-row">
                    <div class="form-group col-md-4" style="margin-top:-50px;">
                      <label for="StuSpecialty">Select your specialties (Select more than one) Use CTRL to select more than one</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>Architecture</option>
                        <option>Business/Systems analysis</option>
                        <option>Cloud computing</option>
                        <option>Database development</option>
                        <option>Database administration</option>
                        <option>Digital realities - Virtual reality, augmented reality</option>
                        <option>Engineering - Network</option>
                        <option>Engineering - Software</option>
                        <option>Helpdesk and IT support</option>
                        <option>Mobile app computing</option>
                        <option>Multimedia</option>
                        <option>Network and systems administration</option>
                        <option>Product management and development</option>
                        <option>Programme and project management</option>
                        <option>Sales pre and post</option>
                        <option>Security</option>
                        <option>Software developer</option>
                        <option>Technical writing</option>
                        <option>Telecommunications</option>
                        <option>Testing</option>
                        <option>Quality assurance</option>
                        <option>Web development and production</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                  
                  
                 

                  <br><br><br><br><br>
                  
                  <h3 style="margin-top:-15px;margin-left:15px;color:white;">Last Step</h3>
                      <br>
                      
                      <div class="form-row">
                          
                        <div class="form-group col-md-6">
                        <label for="StuComments">Comments</label>
                        <textarea style="resize: none;"class="form-control" id="StuComments" rows="3"></textarea>
                      </div>
                        
                        <div class="form-group col-md-3">
                          <label>Proove you're a human</label>
                          <div class="g-recaptcha" data-sitekey="6LcWilcUAAAAALYkEWBCPhqJ3QTq2CO8nZzXdK9j"></div>
                        </div>   
                        
                        <div style="margin-left:5px;" class="form-group col-md-3">
                          <p style="color:white;">Submit Form</p>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        
                      </div>
                      


                  
                      
                    </form>
                    

                    
                    
                      </div>
              


                </div>
               </div>
           </div>-->
           
           
            

            </div>
            
            







        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
             <script src="http://intern-portal-cwhale.c9users.io/js/app.js"></script>


         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
