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
	<style>
		
		body{
			background:url(69554731-exam-wallpapers.jpg);
			background-size:cover;
			color:white;
			font-family:'Roboto', sans-serif;
		}
		

		.head{width:70%;height:100px;margin-top: 7%;border:3px solid white;}
		.main{width:70%;height:400px;}
		.footer{width:70%;height:100px;}

		.container{background-color:rgba(0,0,0,0.7);width:100%;height:100%;}






	</style>
	
</head>
<body>
	<center>
	<div class="head">
		<div class="container">
			<p style="font-size:40px;font-weight: bold;">Welcome to the quiz </p>
		</div>
	</div>	
	
	<div class="main">
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
	</div>

	<div class="footer">
		<div class="container">
			Copyright &copy; 2014, REC QUIZZER
		</div>
	</div>

</center>
</body>
</html>