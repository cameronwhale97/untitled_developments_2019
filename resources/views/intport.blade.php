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
                <h1>My Portfolio</h1>
                <div style="width:100%;height:100%;">
                    <div style="float:left;margin-right:100px;">
                        <form method="post" action="{{url('intport-delete-qualification')}}">
                            {{ csrf_field() }}
                            <h2>My Qualifications</h2><br/>
                            
                            <div style="padding-left:15px">
                            <?php
                                if($qualifications->count() < 1)
                                {
                                    echo "<h3>No qualifications to show.</h3>";
                                }
                                foreach($qualifications as $qualification)
                                {
                                    echo "<hr/><h3>" . $qualification->QualificationTitle . "</h3>";
                                    echo "<h4>" . $qualification->InstitutionName . "</h3><br/>";
                                    echo "<input type=\"submit\" value=\"Remove\" />";
                                    echo "<input type=\"hidden\" name=\"qualificationId\" value=\"$qualification->QualificationId\" />";
                                }
                            ?>
                            </div>
                        </form>
                        <hr/>
                        <br/><br/><h4>Add Another</h4>
                        <form action="{{url('intport-qualification')}}" method="post">
                            <table class="form-table">
                                <tr>
                                    <td><span>Qualification Title (e.g. Bachelor of Information Technology)</span></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="qualificationTitle" /></td>
                                </tr>
                                <tr>
                                    <td><span>InstitutionName (e.g. Waikato Institute of Technology)</span></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="institutionName" /></td>
                                </tr>
                                <tr>
                                    <td rowspan="2"><input type="submit" style="width: 80px;" /></td>
                                </tr>
                            </table>
                            <br/>
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <div style="float:left;">
                        <form method="post" action="{{url('intport-delete-experience')}}">
                            {{ csrf_field() }}
                            
                            <h2>My Work Experience</h2><br/>
                            
                            <div style="padding-left:15px">
                            <?php
                                if($experiences->count() < 1)
                                {
                                    echo "<h3>No work experience to show.</h3>";
                                }
                                foreach($experiences as $experience)
                                {
                                    echo "<hr/><h3>$experience->JobTitle</h3>";
                                    echo "<h4>$experience->WorkplaceName</h4>";
                                    echo "<span><i>Started on $experience->StartDate</i></span><br/>";
                                    echo "<span><i>Ended on $experience->EndDate</i></span><br/><br/>";
                                    echo "<span>$experience->JobDescription</span>";
                                    echo "<input type=\"hidden\" name=\"experienceId\" value=\"$experience->ExperienceId\" />";
                                    echo "<br/><br/><input type=\"submit\" value=\"Remove\" />";
                                }
                            ?>
                            </div>
                        </form>
                        <hr/>
                        <br/><br/><h4>Add Another</h4>
                        <form action="{{url('intport-experience')}}" method="post">
                            <table class="form-table">
                                <tr>
                                    <td><span>Job Title (e.g. Software Engineer)</span></td>
                                    <td><span>Workplace (e.g. Gallagher)</span></td>
                                    <td><span>Job Description</span></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="jobTitle" /></td>
                                    <td><input required type="text" name="workplace" /></td>
                                    <td rowspan="3"><textarea required name="jobDescription" cols="40" rows="4"></textarea><!--<input style="height:30px" required type="text" name="jobDescription" size="35" />--></td>
                                </tr>
                                <tr>
                                    <td><span>Start Date</span></td>
                                    <td><span>End Date</span></td>
                                </tr>
                                <tr>
                                    <td><input required type="date" name="startDate" /></td>
                                    <td><input required type="date" name="endDate" /></td>
                                </tr>
                            </table>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" />
                            <br/>
                            
                            {{ csrf_field() }}
                        </form>
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
