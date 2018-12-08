<?php include'database.php' ?>
<?php session_start();
if($_SESSION['logged_in'] == '1' ) 
{
?>

<?php
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];

	$choices=array();
	$choices[1]=$_POST['choice1'];
	$choices[2]=$_POST['choice2'];
	$choices[3]=$_POST['choice3'];
	$choices[4]=$_POST['choice4'];

	$query = "INSERT INTO questions(question_number,text) VALUES('$question_number', 
	'$question_text')";
	$insert_row = mysql_query($query);

	if($insert_row){
		foreach ($choices as $choice => $value) {
			if($value !=''){
				if($correct_choice == $choice){
					$is_correct = 1;
				}
				else{
					$is_correct =0;
				}
				$query = "INSERT INTO choices(question_number,is_correct,text) VALUES('$question_number','$is_correct','$value')";
				$insert_row = mysql_query($query);
				if($insert_row ){
					continue;
				}else{
					die();
				}
			}
			
		}
		$msg = 'Question has been added';
	}
}

		$query = "select * from questions";
		$results = mysql_query($query);
		$total = mysql_num_rows($results);
		$next = $total+1;
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

	
#box111{width:99.9%;height:15%;}
	#box111 p{margin-left: 2%;margin-top: 5%;text-transform: capitalize;font-size:19px;}

	#box112{width:99.9%;height:10%;border-top: 1px solid white;}
	#box112 a p{margin-left: 5%;width: 100%;height: 100%;line-height: 3.4;}
	#box112:hover{background:white;color:#B9770E;font-weight: bold;}
	#box112 a p:hover{color: #B9770E;}

	#box113{width:99.9%;height:10%;//border-bottom:1px solid white;border-top: 1px solid white;}
	#box113 a p{margin-left: 5%;width: 100%;height: 100%;line-height: 3.4;}
	#box113:hover{background:white;color:#B9770E;font-weight:bold;}
	#box113 a p:hover{color: #B9770E;}
	

	#box114{width:99.9%;height:10%;border-top: 1px solid white;}
	#box114 a p{margin-left: 5%;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box114:hover{background:white;color:#B9770E;font-weight: bold;}
	#box114 a p:hover{color: #B9770E;}
	

	#box115{width:99.9%;height:10%;border-bottom:1px solid white;border-top: 1px solid white;}
	#box115 a p{margin-left: 5%;;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box115:hover{background:white;color:#B9770E;font-weight: bold;border:1px solid black;}
	#box115 a p:hover{color: #B9770E;}

	

	#box116{width:99.9%;height:10%;border-bottom:1px solid white;background: white;}
	#box116 a p{margin-left: 5%;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;font-weight: bold;color: #B9770E;}
	
	#box117{width:99.9%;height:10%;border-bottom: 1px solid white;}
	#box117 a p{margin-left: 5%;;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box117:hover{background:white;color:#B9770E;font-weight: bold;border:1px solid black;}
	#box117 a p:hover{color: #B9770E;}

	#box118{width:99.9%;height:10%;border-bottom: 1px solid white;}
	#box118 a p{margin-left: 5%;;width: 100%;height: 100%;//border:1px solid green;line-height: 3.4;}
	#box118:hover{background:white;color:#B9770E;font-weight: bold;}
	#box118 a p:hover{color: #B9770E;}


	#box12 #box121{width:40%;height:40%;//border:1px solid steelblue;float: left;margin-top:14%;margin-left:6%; }
	#box12 #box122{width:40%;height:40%;//border:1px solid steelblue;float:right;margin-top:14%;margin-right:6%;}
	main .container{width:95%;height:570px;background: white;font-family:'Roboto', sans-serif;}
		main form label{display: inline-block;width:220px;font-size: 18px;font-weight: normal;}
		main form input[type="text"]{width:75%;height:33px;border-radius:2px;border:1px steelblue solid;padding-bottom:17px;padding: 4px;}
		main form input[type="number"]{width:9%;height:33px;border-radius:2px;border:1px steelblue solid;padding-bottom:15px;padding: 4px;}

		main form input[type="submit"]{width:200px;height:44px;margin-right: 2%;
			background-color:#B9770E  ;color:white;font-size: 19px;border:2px solid #B9770E;border-radius:3px;} 	
		main form input[type="submit"]:hover{background-color: white;color:#B9770E;font-weight:bold;}
		main form p{padding:4px;}
	

	
	
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
				<div id="box116"><a href="#" style="text-decoration: none;color: white;"><p>Add Question</p></a></div>
				<div id="box117"><a href="updateqn.php" style="text-decoration: none;color: white;"><p>Update Question</p></a></div>
				<div id="box118"><a href="deleteqn.php" style="text-decoration: none;color: white;"><p>Delete Question</p></a></div>
			</div>			
			
			<div id="box12">

				<br>
				<main>
		<div class="container">
			<h1>Add Question</h1>
			<?php
			if(isset($msg))
			{
				
			}
			?>
			<hr style="border:1px solid steelblue;width:100%;">
			<br>
			<form method="post" action="addqn.php">
				<p>
					<label>Question Number:</label>
					<input type="number" value="<?php echo $next; ?>" name="question_number" />
				</p>
				<p>
					<label>Question Text:</label>
					<input type="text" name="question_text" />
				</p>
				<p>
					<label>Choice #1:</label>
					<input type="text" name="choice1" />

				</p>
				<p>
					<label>Choice #2:</label>
					<input type="text" name="choice2" />

				</p>
				<p>
					<label>Choice #3:</label>
					<input type="text" name="choice3" />

				</p>
				<p>
					<label>Choice #4:</label>
					<input type="text" name="choice4" />

				</p>
				<p>
					<label>Correct Choice Number:</label>
					<input type="number" name="correct choice" />

				</p>
				<br>
				<center>
				<p>
				
					<input type="submit" name="submit" value="Add Question" />

				</p>
			</center>

			</form>
		</div>
	</main>
			
			</div>
		</div>
</body>
</html>


<?php
}
else{
	include('adminlog.html');
}?>