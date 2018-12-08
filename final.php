<?php include'database.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP QUIZ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>REC QUIZZER </h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
			<p>Congrats! You've Completed the Test </p>
			<p>Your Final Score is <?php  echo $_SESSION['score']; ?></p>
			<a href="question.php?n=1" class="start">Take Again <?php session_destroy(); ?></a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2014, REC QUIZZER
		</div>
	</footer>

</body>
</html>