<?php include 'database.php';   ?>
<?php
	if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:cover2.html');
    exit;
}
?>
<?php session_start();
if($_SESSION['logged_in'] == '1' ) 
{
?>

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
		

		.head{width:60%;height:110px;border-radius:20px 20px 0px 0px;border:2px solid white;  
			  background-color:rgba(0,0,0,0.8);border-bottom: none;margin-top:3%;}
		.main{width:60%;height:502px;border:2px solid white; background-color:rgba(0,0,0,0.8);//border-top:none;border-radius:0px 0px 20px 20px;}
		.footer{width:60%;height:100px;border-radius:0px 0px 20px 20px;border:2px solid white;
			background-color:rgba(0,0,0,0.8);border-top: none;}
		.container{width:100%;height:100%; }
		.main .container li{padding: 9px;font-size: 19px;}
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
  margin-right:10%;
  float: right;
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

@media only screen and (max-width: 600px){} 





	</style>
	
</head>
<body onLoad="if(history.length>0)history.go(+1);">
	<center>
	<div class="head">
		<div class="container">
			<p style="font-size:40px;font-weight: bold;">Welcome to the quiz </p>
		</div>

	</div>	
	
	<div class="main">
		<div class="container"><br>
			<p id="p1">Before apperaing in quiz see following rules :</p> 
			
			<ul>
				<li>This is a multiple choise quiz to test your knowledge.</li>
				<li>Quiz consists of </strong> <?php echo $total; ?> questions</li>
				<li>You can check option only once.</li>
				<li>Each correct answer will hold value of one mark.</li>
				<li>Quiz does not involve negative marking.</li>
				<li>For each question you will get 10 seconds.</li>
				<li>Total Time for Quiz depends on number of questions.</li>
				


			</ul><br>

			<form action="ques2.php?n=1" method="POST">
			<button class="button" name="submit1"><span>START QUIZ </span></button>
			</form>
			
		</div>
	</div>

	

</center>
</body>
</html>

<?php
}
else{
  include('register2.html');
}?>

