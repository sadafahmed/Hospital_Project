<?php

	include('session.php');

?>
          <?php

include 'db.php';

$query= "select *from accountant order by 1 desc LIMIT 10";

$run= mysqli_query($mysqli, $query);

while($row = mysqli_fetch_array($run)){
  
  $name = $row[1];
  $add = $row[4];
  $contNo = $row[5];
   
  

?>
<style>
a{text-decoration: none;}
</style>
<tr>
<td><?php echo $name; ?></td>
<td><?php echo $add; ?></td>
<td><?php echo $contNo; ?></td>
</tr>
<?php } 

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KC </title>

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
<!-- Calander -->
		
			

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


</head>

<style>	
			@media print {
    .aside, .sidebar,.header[role="banner"],.copyright-info, .footer,.comments,.respond,.navbar nav_title ,
	.pagination, .top_nav, .button, .left_col scroll-view, .search,.input-group
	,.panel-heading ,.to-hide,.nav_menu, #myDiv
	{
        display: none;
    }
	.nav navbar-nav navbar-right
	{display: none;}
.main_container, .content ,.main ,.table table-striped table-bordered table-hover {
    width: 100%;
    margin: 30px;
    padding: 0px;
}
* {
    color: #000;    
    background-color: #fff;
    @include box-shadow(none);
    @include text-shadow(none);
}
	a::after {
    content: "( "attr(href)" )"
}	

#dataTable{
	margin: 20px;
	width: 1000px;
	font-size: 25px;
	padding: 15px;
	

	}
	}   


</style>


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
                <img src="images/h.png" alt="..." class="img-circle profile_img">
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
		
  
  
<div class="container">



<!-- Export a Table to Excel - START -->
<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />

<div class="container">
 <?php
	include ('header.php');
?>
    

   
			<div id="myDiv">
			<ul class="nav nav-tabs">
   <li class="active"><a href="account_details.php"><i class="glyphicon glyphicon-menu-hamburger"></i> Accountant detail</a></li>
  <li><a href="account_form.php"><i class="glyphicon glyphicon-plus"></i> Add Accountant</a></li>
  <div style='float: right;'>
  
 <li> <button onclick="myFunction()" type="button" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-print"> Print</span> 
        <script>
function myFunction() {
    window.print("");
	
	
}
</script>
</li>
		</div>
		  <div style='float: right;'>
		<li><button id="exportButton" class="btn btn-sm btn-danger clearfix"><span class="fa fa-file-excel-o"></span> Export to Excel</button></li>
</div>
  </ul>
  
  
  </div>
    
             
			 
		
       <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           			<form class="form-inline">	
  	

<input type="text" id="searchTerm" class="form-control" onkeyup="doSearch()" size="30" placeholder="Search...."/>

<div style='float: right;'>
  <div class="input-group" style="font-size: 15px";>
    <label for="show entiries">Show:</label>
     <select>
  <option value="">10</option>
  <option value="">20</option>
  <option value="">50</option>
  <option value="">All</option>
</select> 
    <label for="show entiries">Entries</label>
       </small>
	   
  </div>
   </div> <br><br>
   </div>
<table id="dataTable" class="table table-striped table-bordered table-hover" border="1" width="100%" cellspacing="0" cellpadding="5">
     <thead>
         <tr>
            <th>Name</th>
            <th>Address</th>
			<th>Contact No</th>
         </tr>
     </thead>
     <tbody>     

       
     </tbody>
</table>


<script>
function doSearch() {
    var searchText = document.getElementById('searchTerm').value;
    var targetTable = document.getElementById('dataTable');
    var targetTableColCount;
            
    //Loop through table rows
    for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
        var rowData = '';

        //Get column count from header row
        if (rowIndex == 0) {
           targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
           continue; //do not execute further code for header row.
        }
                
        //Process data rows. (rowIndex >= 1)
        for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
            rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
        }

        //If search term is not found in row data
        //then hide the row, else show
        if (rowData.indexOf(searchText) == -1)
            targetTable.rows.item(rowIndex).style.display = 'none';
        else
            targetTable.rows.item(rowIndex).style.display = 'table-row';
    }
}



</script>
<script>

<!-- you need to include the shieldui css and js assets in order for the components to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        Name: { type: String },
                        Age: { type: Number },
                        Email: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to Excel
            dataSource.read().then(function (data) {
                new shield.exp.OOXMLWorkbook({
                    author: "PrepBootstrap",
                    worksheets: [
                        {
                            name: "PrepBootstrap Table",
                            rows: [
                                {
                                    cells: [
                                        {
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Name"
                                        },
                                        {
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Age"
                                        },
                                        {
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Email"
                                        }
                                    ]
                                }
                            ].concat($.map(data, function(item) {
                                return {
                                    cells: [
                                        { type: String, value: item.Name },
                                        { type: Number, value: item.Age },
                                        { type: String, value: item.Email }
                                    ]
                                };
                            }))
                        }
                    ]
                }).saveAs({
                    fileName: "PrepBootstrapExcel"
                });
            });
        });
    });
</script>
<style>
    #exportButton {
        border-radius: 0;
    }
</style>

<!-- Export a Table to Excel - END -->

</div>

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

 <center>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="account_details.php">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</center>
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
</div>
  </body>

</html>
