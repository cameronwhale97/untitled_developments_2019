<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>


        <title>Wintec Internship Portal</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

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
			    <h2 style="color:white;">My Mail</h2>
            <div class="line"></div>
			<br>


<div style="margin-top:20px"></div>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>


<div class="container">
   
    <div class="row">
        <div class="col-md-12">
             <table style="margin-top:-50px;margin-left:-15px;color:white;">
                          <tr>
                            <th>From</th>
                            <th>Subject</th>
                            <th>Received</th>
                            <th></th>
                          </tr>
                           <?php 
            
            if(empty($messages))
                {
                    
                     echo "<h4 style='color:white;'>No messages to display.</h4>";
                }
            else{
                foreach($messages as $message)
                {
                    if($message->Read == 0)
                    {
                        echo "<tr>";
                        echo"<td><strong>".$message->From."</strong></td>";
                        echo"<td><strong>".$message->Subject."</strong></td>";
                        echo"<td><strong>".$message->Received."</strong></td>";
                        echo"<td><a href=\"/message/".$message->MailId."\">View</a></td>";
                        echo "</tr>";
                    }
                    else
                    {
                        echo "<tr>";
                        echo"<td>".$message->From."</td>";
                        echo"<td>".$message->Subject."</td>";
                        echo"<td>".$message->Received."</td>";
                        echo"<td><a href=\"/message/".$message->MailId."\">View</a></td>";
                        echo "</tr>";
                    }
                    
                }
            }
           
                        
            
            
            ?>
                    </table>
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
