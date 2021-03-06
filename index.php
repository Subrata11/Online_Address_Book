<?php
session_start();
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link href='img/pb1.png' rel='icon' type='image/x-icon'/>

	  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
	
		<style>
	body  {
	    background-image: url("img/.jpg");
	    background-color: #cccccc;
	}
	</style>


</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-folder-open"></span>   Manage Your Phonebook</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Hi! <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>  Contact Us</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
 
<center> 
 <legend><h3><strong>Make your Phone Book</h3><h3>You can Add,Delete,Edit,Search from the database Easily.</strong></h3></legend>
</center>


<center> 
<legend>
 <a href="#hero"><img src="img/phonebook-icon.png" alt="" title="" /></img></a>
</legend>
</center>
 
 <legend><p><font face="verdana" color=""><h4>
PHP Address Book is a simple, easy to use web based address and phone book that is based on PHP and MySQL database. The open source software is released under the GNU GPL license. The script allows the users to search, edit, add, and delete address entries from the web browser. The PHP Address Book allows each of the users to have their own login usernames. The PHP address book asks for details like first name, last name, business name, designation, address. Contact details like telephone number,fax number, cell number, email address, postal address, city, zip code etc. Customer list and details in the form of client name, address, contact numbers and personal information like birthdays, anniversaries and home address and contact details. PHP address book offers features like: </br></br>
1.	Easy and manageable contact and group information </br></br>
2.	Allows easy export of Excel, vCard-import card, </br></br>
3.	Displays geographical maps of groups </br></br>
4.	Detects and displays in over 12 languages </br></br>
5.	Displays upcoming birthdays of the contacts </br></br>
6.	It is optimized and supports ActiveSync for iPhones and Android users </br></br>
7.	Shows birthdays in iPhone calendar </br></br>
8.	Authenticates user access with user id and password and IP address.</br></br></br></br></br></br>

</font></p> </legend>


        <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

            <div class="container">
                <div class="navbar-text pull-left">
                    <p> <span class="glyphicon glyphicon-globe"></span> 2017 We Are "One"</p>
                </div>
                <div class="navbar-text pull-right">
                    <a href="#"><i class="fa fa-facebook-square fa-2x icon-padding"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x icon-padding"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-2x icon-padding"></i></a>
					
                </div>
            </div>

        </div>

 

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

