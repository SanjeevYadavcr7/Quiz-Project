<?php include'database.php' ?>

<?php session_start();
if($_SESSION['logged_in'] == '1' ) 
{
?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin_panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.navbar
	{
		margin-bottom:0;
		border-radius:0;
		background:#B9770E;
		color: #fff;
		padding: 1% 0;
		font-size: 1.2em;
		//border:1px solid white; 
		//transition: .5s;
	}

	.navbar-brand
	{
		float: left;
		//border:1px solid white;
		min-height: 55px;
		padding:5px 10px 5px;
	}
	.navbar .navbar-header{//border:1px solid #D35400;margin-left: 3%;}

	.navbar .navbar-nav li a{//border:1px solid white;margin-right:5%;font-size:21px;font-family:'Roboto', sans-serif;//font-weight: bold;}

	.navbar .navbar-nav li a:hover{
		color:#B9770E;background-color:white;border:1px solid white;
	}

	.navbar .navbar-nav .active a,.navbar-inverse .navbar-nav .active a:focus,
	.navbar .navbar-nav .active a:hover {
		color: #fff;
		background: #B9770E;
		border:1px solid white;
		border-radius: 8px;
		

	}
	.navbar .navbar-nav li a
	{
		color: white;
		transition: .5s;
	}
	#box1{width: 100%;height:87vh;border:1px solid black;border-top:none;font-family:'Roboto', sans-serif;}
	#box11{width: 25%;height:100%;border:1px solid black;font-family:'Roboto', sans-serif;float: left;background: #151515;color: white;text-transform:uppercase;font-size: 17px;border-top:none;}
	#box12{width: 74.99%;height:100%;border:1px solid black;font-family:'Roboto', sans-serif;float: right;background: #E5E7E9;border-top:none;
	border-bottom: none;}

	#box111{width:99.9%;height:15%;border:1px solid black;//border-bottom: 1px solid white;}
	#box111 p{margin-left: 2%;margin-top: 5%;text-transform: capitalize;font-size:19px;}

	#box112{width:99.9%;height:10%;border:1px solid black;border-bottom: 1px solid white;background: white;}
	#box112 p{margin-left: 5%;margin-top: 5%;color: #B9770E;font-weight: bold;}

	#box113{width:99.9%;height:10%;border-bottom:1px solid white;}
	#box113 a p{margin-left: 5%;width: 100%;height: 100%;line-height: 3.4;}
	#box113:hover{background:white;color:#B9770E;font-weight: bold;border:1px solid black;}
	#box113 a p:hover{color: #B9770E;}

	#box114{width:99.9%;height:10%;border-bottom:1px solid white;}
	#box114 a p{margin-left: 5%;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box114:hover{background:white;color:#B9770E;font-weight: bold;}
	#box114 a p:hover{color: #B9770E;}

	#box115{width:99.9%;height:10%;border-bottom:1px solid white;}
	#box115 a p{margin-left: 5%;;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box115:hover{background:white;color:#B9770E;font-weight: bold;}
	#box115 a p:hover{color: #B9770E;}

	#box116{width:99.9%;height:10%;border-bottom:1px solid white;}
	#box116 a p{margin-left: 5%;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box116:hover{background:white;color:#B9770E;font-weight: bold;}
	#box116 a p:hover{color: #B9770E;}

	#box117{width:99.9%;height:10%;border-bottom: 1px solid white;}
	#box117 a p{margin-left: 5%;;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box117:hover{background:white;color:#B9770E;font-weight: bold;}
	#box117 a p:hover{color: #B9770E;}

	#box118{width:99.9%;height:10%;border-bottom: 1px solid white;}
	#box118 a p{margin-left: 5%;;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box118:hover{background:white;color:#B9770E;font-weight: bold;}
	#box118 a p:hover{color: #B9770E;}

	#box12 #box121{width:40%;height:40%;//border:1px solid steelblue;float: left;margin-top:14%;margin-left:6%; }
	#box12 #box122{width:40%;height:40%;//border:1px solid steelblue;float:right;margin-top:14%;margin-right:6%;}
	

	
	
</style>


</head>
<body>

	
	<nav class="navbar ">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<p class="p1" style="font-size:31px; "><b>Admin Panel</b></p>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="a_dmin_logout.php">Logout</a></li>
					</ul>
			</div>
		</nav>
		<div id="box1">
			<div id="box11">
				<div id="box111"><p><img src="img1.png" width="30" height="30">&nbsp&nbsp&nbspSanjeev Yadav</p><p id="p1" style="color:#2ECC71;margin-top: -2%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStatus:Online</p></div>
				<div id="box112"><p>Home</p></div>
				<div id="box113"><a href="showrec2.php" style="text-decoration: none;color: white;"><p>SHOW CANDIDATES</p></a></div>
				<div id="box114"><a href="showqns.php" style="text-decoration: none;color: white;"><p>Show Questions</p></a> </div>
				<div id="box115"><a href="showchoice.php" style="text-decoration: none;color: white;"><p>Show choices</p></a></div>
				<div id="box116"><a href="addqn.php" style="text-decoration: none;color: white;"><p>Add Question</p></a></div>
				<div id="box117"><a href="updateqn.php" style="text-decoration: none;color: white;"><p>Update Question</p></a></div>
				<div id="box118"><a href="deleteqn.php" style="text-decoration: none;color: white;"><p>Delete Question</p></a></div>
			</div>
			
			<div id="box12">
				<div id="box121" style="background:white;">
					<p style="font-family:'Roboto', sans-serif;font-size: 25px;margin-left:4%;margin-top:2%;color:black;">My Account</p><hr style="border: 1px solid steelblue;margin-top:2%;"><br>
					<div class="1" style="width:30.8%;height:45.8%;border:1px solid #E5E7E9  ;float: left;margin-left:12%;background:#F2F3F4 ;border-radius:2px; "><img src="if_User_Executive_2_1218710.png" width="50%" height="60%" style="margin-top:5px;margin-left:30px;" ><center><a href="myprofile.php" style="line-height: 2.6;font-size:15px;font-weight: bold;color: steelblue;text-decoration: none;"> My Profile</a></center></div>

					<div class="1" style="width:30.8%;height:45.8%;border:1px solid #E5E7E9;float:right;margin-right:12%;background:#F2F3F4  ;border-radius:2px;">
						<img src="if_logout_63128.png" width="50%" height="60%"  style="margin-top:5px;margin-left:26px;">
						<center>
							<a href="a_dmin_logout.php" style="line-height: 2.6;font-size:15px;font-weight: bold;color: steelblue;text-decoration: none;">Logout</a>
						</center>
					</div>
					<br>
				</div>
				<div id="box122" style="background:white;">
					<p style="font-family:'Roboto', sans-serif;font-size: 25px;margin-left:4%;margin-top:2%;color:black;">Users</p><hr style="    border: 1px solid steelblue;margin-top:2%;">
					<div id="1221" style="width:30.8%;height:45.8%;border:1px solid #E5E7E9;float: left;margin-left: 7%;margin-top:4%;background:#F2F3F4; ">
						<img src="if_preferences-desktop-user-password_24269.png" width="65%" height="65%" style="margin-top:13%;margin-left:15%;">
					</div>
					<div id="1222" style="width:55.99%;height:45.8%;border:1px solid #E5E7E9;border-left: 1px solid #D7DBDD;float: right;margin-right:6.2%;margin-top:4%;background:#F2F3F4;">
						<p style="font-family:'Roboto', sans-serif;font-size:20px;color: steelblue;margin-left: 5%;"><br>Total Users : 1</p>
					</div>
				</div>
			</div>
		</div>
</body>
</html>


<?php
}
else{
	include('adminlog.html');
}?>