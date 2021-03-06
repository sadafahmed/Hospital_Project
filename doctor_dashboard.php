<?php
	
	include ('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KC</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">
  <!-- editor -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
  <link href="css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="css/editor/index.css" rel="stylesheet">
  <!-- select2 -->
  <link href="css/select/select2.min.css" rel="stylesheet">
  <!-- switchery -->
  <link rel="stylesheet" href="css/switchery/switchery.min.css" />

  <script src="js/jquery.min.js"></script>

<link href="css/calander/fullcalendar.css" rel="stylesheet">
      <link href="css/calander/fullcalendar.print..css" rel="stylesheet" media="print">
      
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-hospital-o"></i> <span>KC Hospital</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <?php
			  echo 'Welcome <br>'. ucfirst($_SESSION["user"]);
			  ?>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>Doctor Dashboard</h3>
              <ul class="nav side-menu">
                <li><a><i class="glyphicon glyphicon-dashboard"></i> &nbsp;&nbsp;&nbsp; Dashboard<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                 
				     <li><a href="admin_dashboard.php">Admin</a>
                    </li>
					<li><a href="doctor_dashboard.php">Doctor</a>
                    </li>
                    <li><a href="nurse_dashboard.php">Nurse</a>
                    </li>
                    <li><a href="accountant_dashboard.php">Accountant</a>
                    </li>
					<li><a href="receptionist_dashboard.php">Reciptionist</a>
                    </li>
                  </ul>
                </li>
				<li><a><i class="fa fa-user-md"></i> &nbsp; Doctor Shedule <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                	 <li><a href="Shedule_details.php">Doctor Shedule</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> &nbsp; Doctor <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="dr_form.php">Add Doctor </a></li>
					<li><a href="dr_details.php">Veiw Doctor</a></li>
				    </ul>
                </li>
				<li><a><i class="fa fa-user-md"></i> &nbsp; Doctor Department<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
					 <li><a href="dp_form.php">Add Department</a></li>
					 <li><a href="dp_details.php">Veiw Department</a></li>
					 </ul>
                </li>
				<li><a><i class="fa fa-calendar"></i>  &nbsp; Appointment <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="app_form.php">Add Appointment</a></li>
					<li><a href="app_details.php">Veiw Appointment</a></li>
                    </ul>
               </li>
                <li><a><i class="fa fa-user"></i> &nbsp; Patient <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <li><a href="pat_form.php">Add Patient</a></li>
                    <li><a href="pat_details.php">Patient Detail</a></li>
					<li><a href="treatment_form.php">Add Treatment</a></li>
                    <li><a href="treatment_details.php">Treatment Details</a></li>
					</ul>
                </li>
                <li><a><i class="fa fa-bed"></i> &nbsp; Bed Ward <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <li><a href="room_form.php">Add Room</a>
                    <li><a href="room_details.php">Room Details</a>
					 </li>
                   </ul>
                </li>
                <li><a><i class="glyphicon glyphicon-tint"></i>  &nbsp;&nbsp;&nbsp;  Blood Donor <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <li><a href="blooddonor_form.php">Add Blood donor</a></li>
                    <li><a href="blooddonor_details.php">Blood donor detail</a></li>
					 </ul>
                </li>
			 <li><a><i class="fa fa-edit"></i>  &nbsp; Notice Board <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="notice.php">Add Event</a></li>
					<li><a href=".php">Veiw Notice Board</a></li>
                    </ul>
               </li>
			   <li><a><i class="fa fa-list-alt"></i>  &nbsp; Bill <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <li><a href="bill_form.php">Add Bill Details</a></li>
                    <li><a href="bill_details.php">Veiw Bill</a></li>
                    </ul>
               </li>
      <li><a><i class="fa fa-file-text"></i>  &nbsp; Report <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="birth_detail.php">Birth Report</a></li>
					<li><a href="death_detail.php">Death Report</a></li>
                    </ul>
               </li>
              <ul class="nav side-menu">
                <li><a><i class="glyphicon glyphicon-lock"></i> &nbsp;&nbsp;&nbsp; Profile <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    
                    <li><a href="profile.html"></a>
                    </li>
                  </ul>
                </li>
                </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Doctor</i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">

        <br />
        <div class="">

          <div class="row top_tiles" >
         <a href="app_details.php">   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats"style="height: 100px;">
                <center>
                         <i class="fa fa-exchange" style="font-size: 50px;padding-top: 10px; " ></i>   
               <h3>Appointment</h3>
              </div>
            </div></a>
			</center>
			
           			
          <a href="blooddonor_details.php">  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats"style="height: 100px;">
			  <center>
              <i class="fa fa-tint" style="font-size: 50px;padding-top: 10px; " ></i>
              <h3>Blood Bank</h3>
              </div>
            </div></a>
			
            <a href="shedule_details.php"> <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats"style="height: 100px;">
                <center>
 <i class="fa fa-clock-o" style="font-size: 50px;padding-top: 10px; " ></i>
             <h3>Schedule</h3>
              </div>
            </div></a>
			
		 <a href="treatment_details.php">	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats"style="height: 100px;">
                <center>
 <i class="fa fa-medkit" style="font-size: 50px;padding-top: 10px; " ></i>
             <h3>Treatment</h3>
              </div>
            </div>
 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <center> 
                        <i class="fa fa-file" style="font-size: 50px;padding-top: 10px; " ></i>
                <h3>Report</h3>
				<a href="birth_detail.php"> <input type="submit" name="submit" value="birth" class="btn-danger btn-sm" /></a>
			<a href="death_details.php"> <input type="submit" name="submit" value="death" class="btn-danger btn-sm "/></a>

              </div>
            </div>

			</div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
			  
			  
			   <div class="col-md-12 col-sm-12 col-xs-12" style="height: 120px;" >
                    <div>
                      <ul class="list-unstyled top_profiles scroll-view " style=" border-radius: 5px;color: red; padding: 5px; ">
                        <li class="media event">
                          <?php

include 'db.php';

$query= "select *from noticeboard order by 1 desc LIMIT 1";

$run= mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	$id = $row[0];
	$title = $row[1];
	$date = $row[3];
	$desc = $row[2];
?>

<b><h3 style= "float: left;" ><?php echo $title; ?> &nbsp;&nbsp;&nbsp;&nbsp;</h3></b><br>
 <p style= "font-size: 17px;margin-top: -6px;"><?php echo $desc; ?></p>
<b> <p style= "float: right;">published on :</b>  <?php echo $date;?></p>

<?php } ?>

						 
                        </li>
                      </ul>
                    </div>
                  </div>
                
                 <div class="x_content">
                  <div class="col-md-6 col-sm-6 col-xs-8">
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title" style="background: black;">
                  <h2 style="color: white;">Calender Events</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id='calendar'></div>

                </div>
              </div>
            </div>
			</div>
			</div>
                
				   <div class="col-md-8 col-sm-8 col-xs-11"  style="float:right; margin-top: -500px;">
                    <div>
                     <div class="col-md-8 col-sm-8 col-xs-11" style="float:right;">
            <div class="x_panel">
              <div class="x_title" style="background: black; text-align: center;">
              <h2 style="color: white; padding-left:120px;">Noticeboard </h2>
                
                <div class="clearfix"></div>
              </div>
              <div class="x_content">


                  <div class="jumbotron">
                   <?php

include 'db.php';

$query= "select *from noticeboard order by 1 desc LIMIT 2";

$run= mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	$id = $row[0];
	$title = $row[1];
	$desc = $row[2];
	$date = $row[3];

?>
<center><strong><h3><?php echo $title; ?></h3></strong></center>
<?php echo $desc; ?><br>
<div  style= "float: right;">published on :<br> <?php echo $date;?></div><br><br><br><br>

<?php } ?>

                  </div>
                

              </div>
            </div>
          </div>
                         
                        
                        </li>
                       
                      
                      
                    </div>
                  </div>
			
        </div>


             <footer>
		<style>
		.copyright-info
		{
			margin-top:-10px;
		}	
	</style>
          <div class="copyright-info">
            <h3 align="center" ><font size="5">KC Copyright &copy; 2017
            </h3>
          </div>
		  
          <div class="clearfix"></div>
        </footer>

				  
				  
				  
				  
				  
				  
				  
				  
				  
          <div class="clearfix"></div>
        
        

      </div>
  </div>
  </div>
  
  
      <!-- Start Calender modal -->
     
      

      

      <!-- End Calender modal -->
      <!-- /page content -->
    </div>



  

  <script src="js/bootstrap.min.js"></script>

  <script src="js/nprogress.js"></script>
  
  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

  <script src="js/moment/moment.min.js"></script>
  <script src="js/calendar/fullcalendar.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script>
    $(window).load(function() {

      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      var started;
      var categoryClass;

      var calendar = $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          $('#fc_create').click();

          started = start;
          ended = end

          $(".antosubmit").on("click", function() {
            var title = $("#title").val();
            if (end) {
              ended = end
            }
            categoryClass = $("#event_type").val();

            if (title) {
              calendar.fullCalendar('renderEvent', {
                  title: title,
                  start: started,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            $('#title').val('');
            calendar.fullCalendar('unselect');

            $('.antoclose').click();

            return false;
          });
        },
        eventClick: function(calEvent, jsEvent, view) {
          //alert(calEvent.title, jsEvent, view);

          $('#fc_edit').click();
          $('#title2').val(calEvent.title);
          categoryClass = $("#event_type").val();

          $(".antosubmit2").on("click", function() {
            calEvent.title = $("#title2").val();

            calendar.fullCalendar('updateEvent', calEvent);
            $('.antoclose2').click();
          });
          calendar.fullCalendar('unselect');
        },
        editable: true,
        
      });
    });
  </script>
					
					

                </div>
              </div>
            </div>
          </div>


      </div>
      <!-- /page content -->
    </div>


  </div>


  

 
  <!-- flot -->
 
  <!-- /flot -->
  <!--  -->

  <!-- -->
  <!-- datepicker -->

  <!-- /datepicker -->
</body>

</html>
