<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
			<h2 style="color:white;">My Profile</h2>
            <div class="line"></div>   

			<div class="row">
			    <div class="col-sm-2">
		        <img src="/uploads/avatars/{{ $user->avatar }}" style="margin-left:40px;margin-top:-20px;width:200px; height:150px; float:left; border-radius:50%; margin-right:25px;" onerror="this.onerror=null;this.src='/uploads/avatars/default.jpg';" />
			    </div>

			    <div class="col-sm-4">
			      <h3 style="margin-left:100px;margin-top:10px;color:white;font-size:40px;"> {{ Auth::user()->name }}</h3>
			      <p  style="margin-left:100px;margin-top:10px;color:white;font-size:20px;"> {{ Auth::user()->email }}</p>
			    </div>
			    
			    <div class="col-sm-6">
  			      <p  style="margin-left:100px;margin-top:10px;color:white;font-size:20px;">Qualification:
  			      
  			      <?php 
  			      
  			      foreach($qualifications as $qualification)
                    {
                       echo $qualification->QualificationTitle;
                       break;
                    }
  			      
  			      
  			      ?>
  			      
  			      </p>
			       <p  style="margin-left:100px;margin-top:10px;color:white;font-size:20px;">Institution:
			       
			       <?php 
  			      
  			      foreach($qualifications as $qualification)
                    {
                       echo $qualification->InstitutionName;
                       break;
                    }
  			      
  			      
  			      ?>

  			      </p>
			    </div>
			    
		    </div>
		    
		    <div style="margin-top:40px"></div>
		    
			<div class="row">



			    
			    <div style="margin-left:40px;" class="col-sm-4">
			         <h3 style="color:white">Update Profile Photo</h3>
  
  <p>Aceptable file formats include JPG, PNG, GIF or WebP files.</p>      
  <p>Select choose file to upload your new profile photo</p>   
         <form enctype="multipart/form-data" action="/myprofile" method="POST">
            <label style="color:white;">Update Profile Image</label>
                <input style="color:white" type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input style="margin-top:-25px;" type="submit" class="pull-right btn btn-sm btn-primary">
            </form>

			    </div>
			    
			    <div class="col-sm-7">
  			      <form style="margin-left:100px;" method="post" action="{{url('myprofile-update-preferences')}}">
                            <h3>Update Subject Preferences</h3>
                            <table>
                                <tr>
                                    <?php
                                        $counter = 0;
                                        foreach($subjects as $subject)
                                        {
                                            $accountSubject = $accountSubjects->where('SubjectId', $subject->SubjectId)->first();
                                            if(empty($accountSubject))
                                            {
                                                $isSelected = "";
                                            }
                                            else
                                            {
                                                $isSelected = "Checked";
                                            }
                                            echo "<td style='padding-right: 20px;'><input type=\"checkbox\" name=\"$subject->SubjectName\" value=\"$subject->SubjectId\" $isSelected /><span>$subject->SubjectName</span></td>";
                                            $counter = $counter + 1;
                                            if($counter > 1)
                                            {
                                                echo "</tr><tr>";
                                                $counter = 0;
                                            }
                                        }
                                    ?>
                                </tr>
                            </table>
                            <br/>
                            <input type="submit" />
                            {{ csrf_field() }}
                        </form>
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
