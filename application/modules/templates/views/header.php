<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

	<style type="text/css">
		/* top nav start here */
		/* Add a black background color to the top navigation */
		.topnav {
		    background-color: #333;
		    overflow: hidden;
		}

		/* Style the links inside the navigation bar */
		.topnav a {
		    float: left;
		    display: block;
		    color: #f2f2f2;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    font-size: 12px;
		    margin-right: 50px;
		    letter-spacing: 5px;
		}

		.topnav a:last-child{
			margin-right: 0px;
		}

		/* Change the color of links on hover */
		.topnav a:hover {
		    text-decoration: underline;
		}

		/* Hide the link that should open and close the topnav on small screens */
		.topnav .icon {
		    display: none;
		}

		/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
		@media screen and (max-width: 600px) {
		  .topnav a:not(:first-child) {display: none;}
		  .topnav a.icon {
		    float: right;
		    display: block;
		  }
		}

		/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
		@media screen and (max-width: 600px) {
		  .topnav.responsive {position: relative;}
		  .topnav.responsive a.icon {
		    position: absolute;
		    right: 0;
		    top: 0;
		  }
		  .topnav.responsive a {
		    float: none;
		    display: block;
		    text-align: left;
		  }
		}
		/* top nav ends here */


		/* side menu starts here */
		/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
	    .row.content {height: 700px}
	    
	    /* Set gray background color and 100% height */
	    .sidenav {
	      background-color: #f1f1f1;
	      height: 100%;
	    }
	    
	    /* Set black background color, white text and some padding */
	    footer {
	      background-color: #555;
	      color: white;
	      padding: 15px;
	      text-align: center;
	    }
	    
	    /* On small screens, set height to 'auto' for sidenav and grid */
	    @media screen and (max-width: 767px) {
	      .sidenav {
	        height: auto;
	        padding: 15px;
	      }
	      .row.content {height: auto;} 
	    }
	    /* side menu ends here */

	    .content {
	    	min-height: 700px;
	    }

	    /* breadcrumb start here */
	    ul.breadcrumb {
	    	margin-top: 10px;
	    	margin-bottom: 50px;
		    padding: 10px 16px;
		    list-style: none;
		    background-color: #eee;
		}
		ul.breadcrumb li {
		    display: inline;
		    font-size: 18px;
		}
		ul.breadcrumb li+li:before {
		    padding: 8px;
		    color: black;
		    content: "/\00a0";
		}
		ul.breadcrumb li a {
		    color: #0275d8;
		    text-decoration: none;
		}
		ul.breadcrumb li a:hover {
		    color: #01447e;
		    text-decoration: underline;
		}
		/* breadcrump ends here */

		/* sign up form start here */
		/* Full-width input fields */
		div.signup-form input[type=text], div.signup-form input[type=password], div.login-form input[type=text], div.login-form input[type=password], div.signup-form input[type=email]  {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}

		/* Set a style for all buttons */
		div.signup-form button, div.login-form button {
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 100%;
		}

		/* Extra styles for the cancel button */
		div.signup-form .cancelbtn {
		    padding: 14px 20px;
		    background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		div.signup-form .cancelbtn, div.signup-form .signupbtn {
		    float: left;
		    width: 50%;
		}

		/* Add padding to sign-up elements */
		div.signup-form, div.login-form{
		    padding: 16px;
		    float: none;
		    margin: 0 auto;
		}

		/* Clear floats */
		div.signup-form .clearfix::after{
		    content: "";
		    clear: both;
		    display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
		    div.signup-form .cancelbtn, div.signup-form .signupbtn {
		       width: 100%;
		    }
		}
		/* sign up form ends here */

		.danger {
		    background-color: #ffdddd;
		    border-left: 6px solid #f44336;
		    padding: 10px;
		    float:none;
		    margin: 0 auto;
		}

		/* applicants application form start here */
		.applicant-form{
			width: 80%;
			margin-top:20px;
			margin-bottom: 50px;
		}
		.applicant-form > .jumbotron{
			padding: 15px;
		}
		.tbl-lang-prof{
			width: 100%;
		}
		.tbl-lang-prof td, .tbl-lang-prof th{
			padding: 10px;
			border: 1px solid black;
			border-style: dotted;
		}
		/* applicants application form end here */

		#home-bg{
			background-image: url(<?= base_url(); ?>images/Dubai2.jpg);
			background-size: 100% 100%;
			height: 460px;
			margin: 0px -20px 0 -20px;
			padding: 20px;
			border-bottom: 10px solid yellow;
			color: white;
		}
	</style>

	<title><?php echo $title ?></title>
</head>
<body>
<div class="container-fluid">
	<header class="row">
	    <nav>
	        <div class="topnav" id="myTopnav">
	            <a href="<?php echo site_url('home'); ?>">Home</a>
	            <a href="<?php echo site_url('about'); ?>">About</a>

	            <?php if ($this->session->userdata('role') === 'student'): ?>

	            	<a href="<?php echo site_url('summerjobs/index'); ?>">Summer Jobs</a>

	            <?php elseif ($this->session->userdata('role') === 'admin'): ?>

	            	<a href="<?php echo site_url('users/index'); ?>">Admin</a>

	            <?php elseif ($this->session->userdata('role') === 'applicant'): ?>

	            	<a href="<?php echo site_url('jobs/index'); ?>">Jobs</a>

	            <?php endif; ?>
	            
	            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

	            <?php 
	            if ($this->session->userdata('username')) { ?>

	            <li style="float:right"><a href="<?php echo site_url('users/logout'); ?>">Log out (<?php echo $this->session->userdata('username'); ?>)</a></li>

	            <?php } else { ?>

	            <li style="float:right"><a href="<?php echo site_url('users/sign_up'); ?>">Sign Up</a></li>
	            <li style="float:right"><a href="<?php echo site_url('users/login'); ?>">Log in</a></li>
	            
	            <?php } ?>
	        </div>
	    </nav>
	</header>
	<div class="content">