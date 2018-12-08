<?php include 'database.php';   ?>
<?php
//Get total no. of questions
$query = "select * from questions";
$results = mysql_query($query);
$total =  mysql_num_rows($results);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP QUIZ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style type="text/css">
		
		body{
			background:url(69554731-exam-wallpapers.jpg);
			background-size:cover;
			color:white;
			font-family:'Roboto', sans-serif;
		}
		

		.head{width:70%;height:100px;margin-top: 5%;border:none;}
		main{width:70%;height:400px;//background-color:rgba(0,0,0,0.7);border:none;}
		footer{width:70%;height:100px;border:none;padding: 0px;}

		.container{border:1px solid white;background-color:rgba(0,0,0,0.7);width:99%;height:99%;}






	</style>
	
</head>
<body>
	<center>
	<div class="head">
		<div class="container">
			<p style="font-size:40px;font-weight: bold;">Welcome to the quiz </p>
		</div>
	</div>	
	
	<main>
		<div class="container">
			<h2>Test your phph knowledge</h2>
			<p>This is a multiple choise quiz to test your knowledge of php</p>
			<ul>
				<li><strong>Number of questions : </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple choice</li>
				<li><strong>Estimated Time : </strong><?php echo $total * .5;?> Minutes</li>

			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2014, REC QUIZZER
		</div>
	</footer>

</center>
</body>
</html>