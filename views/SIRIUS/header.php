<?php
require_once ('../../vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
    <title>SIRIUS</title>

     <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--Bootstrap core css for icon-->
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/code.css" rel="stylesheet">
	
	<!-- Bootstrap Dropdown Hover CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
	
	 <!-- slick css-->
	<link rel="stylesheet" href="slick/slick.css" type="text/css">
	<link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
	
	<!-- build:css mfb.css -->
    <link href="dist/mfb.css" rel="stylesheet"><!--need one mfb.css-->
    <!-- slick css-->
	<!--<link rel="stylesheet" href="slick/slick.css" type="text/css">
	<link rel="stylesheet" href="slick/slick-theme.css" type="text/css">-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 	<link rel="shortcut icon" href="img/favicon.png">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--<div><img src="img/fission/bg.jpg"></div>-->
  <body id="myPage" data-spy="scroll" data-target="" data-offset="60">  
  
  <!--header menu start-->
  <div class="nav navbar-fixed-top container">
	  <div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
		  <a href="#"><span><img class="" src="img/logo/logo4.png" width="100" height="100"/></span></a>
		  <li><a href="" data-toggle="modal" data-target=".dept-modal">Add Department</a></li>
		  <li><a href="" data-toggle="modal" data-target=".account-modal">Add Accountant</a></li>
          <li><a href="BookTitle/index.php">Book Title</a></li>
          <li><a href="Birthday/index.php">Birthday</a></li>
          <li><a href="City/index.php">City</a></li>
          <li><a href="Email/index.php">Email</a></li>
          <li><a href="Gender/index.php">Gender</a></li>
          <li><a href="Hobbies/index.php">Hobbies</a></li>
          <li><a href="ProfilePicture/index.php">Profile Picture</a></li>
          <li><a href="SummaryofOrganization/index.php">Summary OF Organization</a></li>
		  
	  </div>
	  <div style="padding:5px;" class="row container">
			<div class="col-md-3 mylogo"><a class="lg-title" href=""><img src="img/logo/logo4.png"/></a></div>
			
			<div class="col-md-9 text-right">
				<span class="icon" onClick="openNav()"><img style="line-height:0px;" width="40" height="40" src="img/icon/menu3.png" Alt="sirius" title="Team Sirius"/></span>
			</div>
	  </div>
	  <!--<span style="font-size:30px;cursor:pointer;color:white;" onClick="openNav()">&nbsp; &#9776; open</span>-->
  </div>
<!-- header menu end-->
<!--Department Start-->
<?php
include('department/dept.php');
include('');

 ?>

<!--//Department Ended-->




























