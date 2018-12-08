<?php include'database.php'; ?>
<?php session_start(); ?>
<?php
	//S

		$query = "select * from questions ";
		$results = mysql_query($query);
		$total = mysql_num_rows($results);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP QUIZ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style>

		body{background:url(69554731-exam-wallpapers.jpg);}


		.main{font-family: 'Roboto', sans-serif;border:1px solid black ;width:60%;height:520px;background:rgba(0,0,0,0.6);margin: 7% auto;border:2px solid white;border-radius:5px;}
		.main .container{color:white;text-align: center;}
		.main .container .current{background-color:rgba(0,0,0,0.7);padding:44px;color: white;border-bottom:3px solid white;font-size: 35px;font-weight: bold;height:40px;text-align: center;border-right:2px solid white;margin-top: 0%;}
		.main .container .current p{margin-top:-1%;//border:1px solid white;display: flex;text-align: center;}
		.main .container .current img{margin-left: 0%;//border:1px solid white;}
		.main .container img{border-radius:50%;width:50px;height:50px;}
		.main .container #x1{text-align: center;font-size: 20px;line-height: 1.9;}
		.main .container #x2{font-size: 25px;}
		.main .container #x3{font-size: 25px;}
		.main .container table tr p{width:771px;padding: 10px;text-align: center;background-color:rgba(0,0,0,0.7);font-weight: bold;margin-top:1%; }
		.main .container a{display: flex;background:rgba(0,0,0,0.7);color: white;text-decoration: none;font-size:17px;border-radius: 2px;}
		.main .container a p{margin-left: 19%;}

		@media only screen and (max-width: 600px){

			.main{width:92%;}
			.main .container .current{font-size:20px;height: 30px;}

			.main .container img{width:30px;height:30px;padding: 3px;}
			.main .container .current p{margin-left: -9%;}
			.main .container #x1{font-size: 18px;text-align: justify;line-height: 1.4;margin-left:2%;margin-right: 2%;margin-top: 0%;}
			.main .container #x2{font-size: 20px;}
			.main .container #x3{font-size: 18px;}

			
			.main .container table tr td p{width:302px;text-align: center;}
			
			.main .container a{//width: 325px;font-size: 13px;}
			.main .container a p{margin-left: 0%;font-weight: bold;}
			.main .container .start a:hover{background: white;color: black;font-weight: bold;}
			



		}
				



		
	</style>
</head>
<body>
		
	
		<div class="main">
		<div class="container">
			<div class="current"><p><img src="tick.png">&nbsp Congrats! You've Completed the Test</p> </div>
			
			<div class="container">
			<p id="x1">ThankYou for appearing in REC TECHNICAL QUIZ. Hope you have attended each question carefully and as per your  final step to summit has been successfully done!</p>
			<p id="x2">Your result is shown below :</p>
			<center>
				<table><tr><td><p id="x3">Your Final Score is <strong><?php  echo $_SESSION['score'] * 1; ?> marks out of <?php echo $total * 1;?></strong>marks</p></td></tr>
					<tr><td><p id="x4" style="margin-top: -2.3%;font-size: 24px;">Your Accuracy Rate is <strong><?php  echo $_SESSION['score'] * 10; ?></strong>%</p></td></tr></table>
		
			<a href="cover2.html" class="start"><p style="font-weight: bold;">IF YOU WANT TO LOGOUT. YOU MAY LOGOUT FORM HERE</p><?php session_destroy(); ?></a>
		</center>
			</div>
				
		</div>
	</div>






</body>
</html>