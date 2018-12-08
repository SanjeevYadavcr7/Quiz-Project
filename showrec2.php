<?php include'database.php' ?>
<?php session_start();
if($_SESSION['logged_in'] == '1' ) 
{
?>
<?php
$query="select * from regcode";
$res=mysql_query($query);

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
		color:#3498DB;background-color:white;border:1px solid white;
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


	#box111{width:99.9%;height:15%;}
	#box111 p{margin-left: 2%;margin-top: 5%;text-transform: capitalize;font-size:19px;}

	#box112{width:99.9%;height:10%;border-bottom:1px solid white;border-top: 1px solid white;}
	#box112 a p{margin-left: 5%;width: 100%;height: 100%;line-height: 3.4;}
	#box112:hover{background:white;color:#B9770E;font-weight: bold;border:1px solid black;}
	#box112 a p:hover{color: #B9770E;}

	#box113{width:99.9%;height:10%;border-bottom:1px solid white;background: white;}
	#box113 a p{margin-left: 5%;width: 100%;height: 100%;line-height: 3.4;color:#B9770E;font-weight: bold;}
	

	#box114{width:99.9%;height:10%;border-bottom:1px solid white;}
	#box114 a p{margin-left: 5%;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box114:hover{background:white;color:#B9770E;font-weight: bold;border:1px solid black;}
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

	#box12 .box{width:96%;height:93%;//border:1px solid steelblue;font-family:'Roboto', sans-serif;
				background: white;margin:2% auto;}
	#box12 .box table, th, td {border:1px solid steelblue;border-collapse: collapse;}
	#box12 .box table{width: 90%;}
	#box12 .box th, td{height:30px;text-align: center;}
	

	
	
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
				<div id="box112"><a href="admin.html" style="text-decoration: none;color: white;"><p>HOME</p></a></div>

				<div id="box113"><a href="showrec2.php" style="text-decoration: none;color: white;"><p>SHOW CANDIDATES</p></a></div>
				<div id="box114"><a href="showqns.php" style="text-decoration: none;color: white;"><p>Show Questions</p></a> </div>
				<div id="box115"><a href="showchoice.php" style="text-decoration: none;color: white;"><p>Show choices</p></a></div>
				<div id="box116"><a href="addqn.php" style="text-decoration: none;color: white;"><p>Add Question</p></a></div>
				<div id="box117"><a href="#" style="text-decoration: none;color: white;"><p>Update Question</p></a></div>
				<div id="box118"><a href="deleteqn.php" style="text-decoration: none;color: white;"><p>Delete Question</p></a></div>
			</div>
			
			<div id="box12">

				<div class="box"><br>
	<h1 style="color:black;margin-left: 2%;">Show Candidates</h1>
	<hr style="border:1px solid steelblue;width: 95%;">
	<br>
	<table align="center">
		
		<tr style="background: #E5E7E9;">
    		<th>S.NO</th><th>NAME</th><th>EMAIL</th><th>PASSWORD</th>
		</tr>
		<?php

		$a=1;
		while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
			?>
		
		<tr>
			<td><center><?php echo $a; ?></center></td>  <!-- can also use index od id-->
			<td style="text-transform: capitalize;"><center><?php echo $row['pname']; ?></center></td>
			<td><center><?php echo $row['pemail']; ?></center></td>
			<td><center><?php echo $row['ppass']; ?></center></td>
		</tr>
		
		<?php
		$a++;
		}
		?>
	</table>
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