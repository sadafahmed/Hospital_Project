<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hospital name </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet">
  <link href="css/floatexamples.css" rel="stylesheet" />

  
  <link href="css/calendar/fullcalendar.css" rel="stylesheet">
  <link href="css/calendar/fullcalendar.print.css" rel="stylesheet" media="print">

  <script src="js/jquery.min.js"></script>

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
             <a href="index.html" class="site_title"><i class="fa fa-hospital-o"></i> <span>Hospital name</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="glyphicon glyphicon-dashboard"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                 
				     <li><a href="index.html">Admin Dashboard</a>
                    </li>
					<li><a href="index1.html">Doctor Dashboard</a>
                    </li>
                    <li><a href="index2.html">Nurse Dashboard</a>
                    </li>
                    <li><a href="index3.html">Accountant Dashboard</a>
                    </li>
					<li><a href="index4.html">Reciptionist Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user-md"></i> Docoter <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="dr_details.php">Docoter Detail</a>
                    </li>
                    <li><a href="form_advanced.html">Advanced Components</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Patient <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="pat_details.php">Patient Detail</a>
                    </li>
                    <li><a href="media_gallery.html">Media Gallery</a>
                    </li>
                   
                   
                  </ul>
                </li>
                <li><a><i class="fa fa-bed"></i> Bed Ward <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="room_details.php">Room</a>
                    </li>
                   
                  </ul>
                </li>
                <li><a><i class="glyphicon glyphicon-tint"></i> Blood bank <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="blooddonor_details.php">Manage blooddonor</a>
                    </li>
                    
                  </ul>
                </li>
              </ul>
             
              <ul class="nav side-menu">
                <li><a><i class="glyphicon glyphicon-lock"></i> Profile <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    
                    <li><a href="profile.html"></a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    
                  </ul>
               
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
              <a id="menu_toggle"><i class="fa fa-bars">&nbsp;&nbsp;Reciptionist</i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                 
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                         <i class="fa fa-exchange" style="font-size: 50px; padding-top: 10px; " ></i>   
               <h3>Appointment</h3>
              </div>
            </div></a>
			</center>
			
          <a href="dr_details.php">   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats" style="height: 100px;">
                <center> 
                        <i class="fa fa-user-md" style="font-size: 50px; padding-top: 10px; " ></i>
                <h3>Doctor</h3>
              </div>
            </div></a>
			
          <a href="room_details.php">  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats"style="height: 100px;">
			  <center>
              <i class="fa fa-bed" style="font-size: 50px; padding-top: 10px; " ></i>
              <h3>Bed allotment</h3>
              </div>
            </div></a>
			
             <a href="shedule_details.php"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats"style="height: 100px;">
                <center>
 <i class="fa fa-clock-o" style="font-size: 50px; padding-top: 10px; " ></i>
             <h3>Schedule</h3>
              </div>
            </div>
          </div></a>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                
				
				 <div class="col-md-12 col-sm-12 col-xs-12"  >
                    <div>
                      
                      <ul class="list-unstyled top_profiles scroll-view " style=" border-radius: 5px; padding: 10px; color: red; height: 120px;">
                        <li class="media event">
                          <?php

include 'db.php';

$query= "select *from noticeboard order by 1 desc LIMIT 1";

$run= mysql_query($query);

while($row = mysql_fetch_array($run)){
	$id = $row[0];
	$title = $row[1];
	$date = $row[3];
	$desc = $row[2];
?>

<b><h3 style= "float: left;" ><?php echo $title; ?> &nbsp;&nbsp;&nbsp;&nbsp;</h3></b><br>
 <p style= "font-size: 17px; margin-top: -6px;"><?php echo $desc; ?></p>
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
                
				  <div class="col-md-8 col-sm-8 col-xs-11"  style="float:right; margin-top: -440px;">
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

$run= mysql_query($query);

while($row = mysql_fetch_array($run)){
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
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>    
            </p>
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
