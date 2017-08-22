<?php

session_start();
?>
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
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
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
        <div class="">

          
		  <div>
		  
		<div class="container ">
<?php
	include ('header.php');
?>  

   
		<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />
 
 <ul class="nav nav-tabs">
 <li><a href="veiwpat_detail.php"><i class="glyphicon glyphicon-menu-hamburger"></i> Veiw detail</a></li>
  <li><a href="pat_details.php"><i class="glyphicon glyphicon-menu-hamburger"></i> Patient Detail</a></li>
  <li class="active"><a href="pat_form.php"><i class="glyphicon glyphicon-plus"></i> Add Patient</a></li>
  <div style='float: right;'>
 <li> <button onclick="myFunction()" type="button" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-print"> Print</span> 
        <script>
function myFunction() {
    window.print();
	 
	
}
</script>
</li>
</div>
	  <div style='float: right;'>
		<li><button id="exportButton" class="btn btn-sm btn-danger clearfix"><span class="fa fa-file-excel-o"></span> Export to Excel</button></li>
</div>
  </ul>
 
          <div class="row">
		 
<div class="col-lg-12">
<style>
.col-lg-12
 {
  text-align: center;
  width: 700px;
  padding-left: 350px;
  
}
h2
{
	font-size: 30px;
}
</style>


 <h2>Add New patient</h2>
      
<?php


	include('db.php');  
				
			$sql = "Select pat_reg_no from patient order by pat_id desc limit 1";
							//		echo $sql; die;
							$result = mysqli_query($mysqli, $sql); 
							
								$row = mysqli_fetch_array($result);
								$incrementedValue = $row['pat_reg_no'] + 1;
								
				if (isset($_POST['submit'])) {
					  $user_reg = mysqli_real_escape_string($mysqli, $_POST['reg']);   
					  $user_name = mysqli_real_escape_string($mysqli, $_POST['name']);   
					  $user_nic = mysqli_real_escape_string($mysqli, $_POST['nic']);   
					  $user_dis = mysqli_real_escape_string($mysqli, $_POST['dis']);   
					  $user_gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
					  $user_age = mysqli_real_escape_string ($mysqli, $_POST['age']);
					  $user_dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
					  $user_weight = mysqli_real_escape_string($mysqli, $_POST['weight']);
					 
					  $user_bg = mysqli_real_escape_string($mysqli, $_POST['bg']);
					  $user_contact_no = mysqli_real_escape_string($mysqli, $_POST['contact_no']);
					  $user_address = mysqli_real_escape_string($mysqli, $_POST['address']);
					  $doctorId = mysqli_real_escape_string($mysqli, $_POST['dr_id']);
			// echo $row['pat_reg_no']; die;
			//echo '<pre>'; print_r($_POST); die;										
				

			  if ($user_name =='' or $user_dis =='' or $user_gender =='' or $user_age ==''
				or $user_dob == '' or $user_bg == "" or $user_contact_no == "" or $user_address == "") {
			 
					   echo "<script>alert('Some Fields are empty')</script>";
					   exit();
					  }
									
									
									  $checkName = 'SELECT pat_nic FROM patient WHERE pat_nic = "'. $user_nic . '"';
									  //echo $checkName; die;
									  $run = mysqli_query($mysqli, $checkName);
							  
						  if (mysqli_num_rows($run) > 0) {
							echo "<script>alert('Name already registered. Input a different name')</script>";
									}
			else {
			$sql = "INSERT INTO patient(pat_reg_no, pat_name, pat_nic, pat_disease, pat_gender, pat_age, pat_dob,
				pat_blood_grp,  pat_contact_no, pat_address, dr_id, pat_weight) VALUES
				
					('$user_reg','$user_name','$user_nic','$user_dis','$user_gender','$user_age','$user_dob','$user_bg',
					'$user_contact_no','$user_address', '$doctorId', '$user_weight')";
					
				
			if (mysqli_query($mysqli, $sql)) {
			
			  echo "<script>window.open('pat_details.php','_self')</script>"; 
			} 
			else {
			  echo "<script>alert('try Another id');</script>";
			}
		  }
		}
		?>

<div class="main">

		  <form method="post" action="pat_form.php">
          
			<div>
           <input type="text" name="reg" readonly  value= " <?php echo $incrementedValue;   ?>"  class="form-control" placeholder="Registration no.." /><br>
            </div>
					
            <div>
           <input type="text" name="name" class="form-control" placeholder="Enter Name.." autofocus /><br>
            </div>
			<div>
			<div>
           <input type="text" name="nic" class="form-control" placeholder="Enter NIC no.."/><br>
            </div>
			
        <div>
           <input type="text" name="dis" class="form-control" placeholder="Enter Disease.." /><br>
            </div>
            
			<div>
           <label> Gender </label>
		  <input type="radio" name="gender" value="Male"> Male
		  <input type="radio" name="gender" value="Female"> Female
           </div><br>
			<div>
           <input type="text" name="age" class="form-control" placeholder="Age.." /><br>
            </div>
			<div>
			<input placeholder="Date of birth..."  class="form-control"type="text" onfocus="(this.type='date')"
				name="dob"><br>
           
            </div>
			<div>
              <select name="dr_id" value="" class="form-control"><br>
			  <option name="dr_id" selected="selected">Select Doctor name</option>
			    <?php
				$query = "SELECT * FROM doctor";
				$result = mysqli_query($mysqli, $query);
				while ($row = mysqli_fetch_array($result)) {
				
				?>
			    <option value="<?php echo $row['dr_id']; ?>"><?php echo $row['dr_name']; ?></option>
				<?php } ?>
              </select>
            </div><br>
			<div>
              <select name="bg" value="blood grp" class="form-control"><br>
			  <option name="bg">Blood group</option>
           <option name="bg">A+</option>
           <option name="bg">A-</option>
           <option name="bg">B+</option>
           <option name="bg">B-</option>
           <option name="bg">O+</option>
            <option name="bg">O-</option>
			<option name="bg">AB+</option>
           <option name="bg">AB-</option>
             </select>
            </div><br>
			<div class="form-group">
			<input type="text" name="weight" class="form-control" placeholder="weight.." /><br>
           
            </div>
					   <div>
           <input type="text" name="contact_no" class="form-control" placeholder="Contact-no.."  /><br>
            </div>
			<div>
           <input type="text" name="address" class="form-control" placeholder="Address.."  /><br>
            </div>
               <div>
	  <input type="submit" name="submit" value="Add New Patient" class="btn-danger btn-lg "/><br>
            </div>
			
			</form>
			
			
			
			
			</div>
			
			</div></div>
			
			

          <div class="clearfix"></div>
                  <div class="clearfix"></div>
                </div>
			
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<script type="text/javascript">
            $(document).ready(function() {
              $('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>


                <div class="x_content">

                  <!-- start form for validation -->

                <div class="ln_solid"></div>
                </div>

              </div>
            
          </div>


        <!-- /page content -->

        <!-- footer content -->
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
        <!-- /footer content -->

      </div>

    </div>
  
</div>
  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- tags -->
  <script src="js/tags/jquery.tagsinput.min.js"></script>
  <!-- switchery -->
  <script src="js/switchery/switchery.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- richtext editor -->
  <script src="js/editor/bootstrap-wysiwyg.js"></script>
  <script src="js/editor/external/jquery.hotkeys.js"></script>
  <script src="js/editor/external/google-code-prettify/prettify.js"></script>
  <!-- select2 -->
  <script src="js/select/select2.full.js"></script>
  <!-- form validation -->
  <script type="text/javascript" src="js/parsley/parsley.min.js"></script>
  <!-- textarea resize -->
  <script src="js/textarea/autosize.min.js"></script>
  <script>
    autosize($('.resizable_textarea'));
  </script>
  <!-- Autocomplete -->
  <script type="text/javascript" src="js/autocomplete/countries.js"></script>
  <script src="js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script type="text/javascript">
    $(function() {
      'use strict';
      var countriesArray = $.map(countries, function(value, key) {
        return {
          value: value,
          data: key
        };
      });
      // Initialize autocomplete with custom appendTo:
      $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#autocomplete-container'
      });
    });
  </script>
  <script src="js/custom.js"></script>


  <!-- select2 -->
  <script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>
  <!-- /select2 -->
  <!-- input tags -->
  <script>
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
      alert("Changed a tag: " + tag);
    }

    $(function() {
      $('#tags_1').tagsInput({
        width: 'auto'
      });
    });
  </script>
  <!-- /input tags -->
  <!-- form validation -->
  <script type="text/javascript">
    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form .btn').on('click', function() {
        $('#demo-form').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });

    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form2 .btn').on('click', function() {
        $('#demo-form2').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form2').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });
    try {
      hljs.initHighlightingOnLoad();
    } catch (err) {}
  </script>
  <!-- /form validation -->
  <!-- editor -->
  <script>
    $(document).ready(function() {
      $('.xcxc').click(function() {
        $('#descr').val($('#editor').html());
      });
    });

    $(function() {
      function initToolbarBootstrapBindings() {
        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'
          ],
          fontTarget = $('[title=Font]').siblings('.dropdown-menu');
        $.each(fonts, function(idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
        });
        $('a[title]').tooltip({
          container: 'body'
        });
        $('.dropdown-menu input').click(function() {
            return false;
          })
          .change(function() {
            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
          })
          .keydown('esc', function() {
            this.value = '';
            $(this).change();
          });

        $('[data-role=magic-overlay]').each(function() {
          var overlay = $(this),
            target = $(overlay.data('target'));
          overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
        });
        if ("onwebkitspeechchange" in document.createElement("input")) {
          var editorOffset = $('#editor').offset();
          $('#voiceBtn').css('position', 'absolute').offset({
            top: editorOffset.top,
            left: editorOffset.left + $('#editor').innerWidth() - 35
          });
        } else {
          $('#voiceBtn').hide();
        }
      };

      function showErrorAlert(reason, detail) {
        var msg = '';
        if (reason === 'unsupported-file-type') {
          msg = "Unsupported format " + detail;
        } else {
          console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
          '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
      };
      initToolbarBootstrapBindings();
      $('#editor').wysiwyg({
        fileUploadError: showErrorAlert
      });
      window.prettyPrint && prettyPrint();
    });
  </script>
  <!-- /editor -->
</body>

</html>