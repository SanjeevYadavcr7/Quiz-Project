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
			background:url(81d8f0964d70091b40166f5c4d1056b8.jpg);
			background-size: cover;
			color:white;
			font-family:'Roboto', sans-serif;
		}
		

		.head{width:70%;height:110px;border-radius:10px 10px 0px 0px;border:2px solid white;  
			  background-color:rgba(0,0,0,0.8);border-bottom: none;margin-top:3%;}
		.head .container p{font-size: 40px;font-weight: bold;}
		.main{width:70%;height:502px;border:2px solid white; background-color:rgba(0,0,0,0.8);//border-top:none;border-radius:0px 0px 10px 10px;}
		.footer{width:60%;height:100px;border-radius:0px 0px 20px 20px;border:2px solid white;
			background-color:rgba(0,0,0,0.8);border-top: none;}
		.container{width:100%;height:100%; }
		.main .container li{padding: 9px;font-size: 20px;}
		.main .container{text-align: left;margin-left:2%; }
		.main .container #p1{font-size:27px;margin-left:2%;}
		.main .container a.start{display: inline-block;color:#D68910 ;background:transparent;border:3px solid white ;padding: 12px 46px;text-decoration: none;margin-right:10%;
			font-weight:bold;border-radius:23px;font-size: 22px;float:right;margin-right:12%;}

		.button {
  border-radius: 30px;
  background-color:transparent;
  border: 3px solid white;
  color: #fff;
  text-align: center;
  font-size:20px;
  padding: 15px;
  width: 220px;
  transition: all 0.5s;
  cursor: pointer;
  font-weight: bold;
}

.button:hover{background-color:#F39C12  ;} 

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button:focus{outline: none;}	

@media only screen and (max-width: 600px)
{
	.head{width:92%;height:80px;border-radius: 3px;font-size: 24px;}
	.head .container p{font-size: 23px;text-transform: uppercase;}
	.main{width: 92%;height:550px;}
	.main .container ul{margin-left: -4%;}
	.main .container ul li{font-size: 16px;padding:7px;}
	.main .container button{width:220px;font-size: 16px;margin-top:-7%;text-transform:uppercase;}

} 





	</style>
	
</head>
<body>
	<center>
	<div class="head">
		<div class="container">
			<p>About REC Tech Quiz </p>
		</div>

	</div>	
	
	<div class="main">
		<div class="container"><br>
			
			
			<ul>
				<li>To Participate first you have to go through<a href="register2.html" style="text-decoration: none;color:#F39C12 ;"> Registration</a> process.</li>
				<li>This is a Multiple choise quiz to test your knowledge.</li>
				<li>Participant can also <a href="login.html" style="text-decoration: none;color:#F39C12 ;">Suscribe</a>  the quiz.</li>
				<li>Total Time for Quiz depends on the number of questions.</li>
				<li>For each question you will get 10 seconds.</li>
				<li>Quiz does not involve negative marking.</li>
				<li>Each correct answer will hold value of five marks.</li>
				<li>Once you have clicked the answer it goes to final submit.</li>

			</ul><br><br>
			<center>
			<form action="cover2.html" method="POST">
			<button class="button" name="submit1"><span>Back to Home</span></button>
			</form>
		</center>
			
		</div>
	</div>

	

</center>
</body>
</html>