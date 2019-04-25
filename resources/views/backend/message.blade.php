<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Wintec Internship Portal</title>
        <link rel="shortcut icon" type="image/png" href="/img/favicon.ico"/>

         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>






        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/css/style4.css">
    </head>
    <body>

            <style>
                   body{
                      background: url('/img/wintec.png') no-repeat center center fixed;
                      background-size: 100% 100%;

                    }
            </style>



            <!-- Page Content Holder -->
<div class="wrapper">
            <!-- Sidebar Holder -->
<nav id="sidebar">
                <div id="sidebarCollapse" class="sidebar-header">
                    <h3><img id="sidebarCollapse" style="margin-left:-14px" src="/img/wintec3x6.png"></h3>
                    <strong><img style="margin-left:-10px" src="/img/winteclogo.png"></strong>
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
			    <h2 style="color:white;">My Mail</h2>
            <div class="line"></div>
			<br>


<div style="margin-top:-50px"></div>




<div class="container">
   
    <div class="row">
        <div class="col-md-12">
            <?php 
            
            if(empty($message))
                {
                     echo "No message found for this ID.";
                }
            else
            {   
                echo "<div class='container'>";
                    echo "<div class='row'>";
                        echo "<div style='margin-left:-25px;' class='col-sm-6'>";
                            echo "<h3 style='color:white;'>From: $message->From</h3>";
                            echo "<h3 style='color:white;'>Subject: $message->Subject</h3>";
                            echo "<h3 style='color:white;'>Received: $message->Received</h3><br/><br/>";
                        echo "</div>";
                        
                            echo "<div style='margin-right:25px;class='col-sm-6'>";
                            echo "<h3 style='color:white;'>Your Actions</h3>";
                            echo "<button type='button'>Next Message</button>&nbsp;&nbsp;";
                            echo "<button type='button'>Previous Message</button>&nbsp;&nbsp;";
                            echo "<button type='button'>Delete</button>";
                            echo "<br><br>";
                            
                            echo "<button type='button'>Reply to Message</button>&nbsp;&nbsp;";
                            echo "<button type='button'>Return to Main Menu</button>&nbsp;&nbsp;";
                            
                            


                        echo "</div>";
                        
                        
                     echo "</div>";
                echo "</div>";
                
                
                
                
               
                echo "<div style='margin-top:-20px;' class='line'></div>";
                echo "<h3 style='margin-top:-20px;color:white;'>Message Content:</h3><br><p style='color:white;margin-top:-25px;'>$message->Body</p>";
            }
            ?>
            
        </div>
    </div>

</div>




            
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

