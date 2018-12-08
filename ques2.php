<?php include'database.php'; ?>
<?php session_start();
if($_SESSION['logged_in'] == '1' ) 
{
?>

<?php
	//Set question_number
	$number = (int) $_GET['n'];

		$query = "select * from questions ";
		$results = mysql_query($query);
		$total = mysql_num_rows($results);

		$query = "select * from questions where question_number =$number";
		$result = mysql_query($query);
		$question = mysql_fetch_assoc($result);
		
  	//Get Choices
		$query = "select * from choices where question_number = $number";	
		$choices = mysql_query($query);
	
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP QUIZ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style>

		body{background:url(69554731-exam-wallpapers.jpg);
		background-size: cover;}

		.main{font-family: 'Roboto', sans-serif;border:1px solid black ;width:100%;height:650px;background:rgba(0,0,0,0.6);}
		.main .container .current{background-color:rgba(0,0,0,0.7);padding:44px;color: white;border-bottom: 4px solid white;font-size: 40px;font-weight: bold;
									margin-top: 0%;}
		.main .container .question{font-size: 20px;text-transform:uppercase;}
		
		.main .container .question{background-color:rgba(0,0,0,0.7);padding:20px 30px;color: white;font-weight: bold;}

		.main .container form input[type="submit"]{float:right;width:220px;height:49px;margin-right: 2%;
			background-color:#3498DB  ;color:white;font-size: 19px;border:2px solid#3498DB;border-radius:3px;} 	
		.main .container form input[type="submit"]:hover{background-color: white;color:#3498DB;font-weight:bold;}
		.main .container .choices li input[type="submit"]:hover{border:3px solid steelblue;}
		#pop{width: 100%;height:60px;margin:0px auto;margin-top: -1%;text-align: left;background:#282828;border:2px solid white;padding: 10px;font-size: 20px;}	
		#pop:hover{color: black;background-color: white;border:3px solid #3498DB;font-weight: normal;}

		

		@media only screen and (max-width: 600px){

			.main .container .current{font-size: 30px;text-align: center;}
			.main .container .question{font-size: 16px;text-align: center;}
			.main .container form table td{padding:10px 16px;}
			.main .container form input[type="submit"]{width:150px;height:40px;margin: -2px 28%;font-size: 16px;}
		}	
		
	</style>

	<script type="text/javascript">
		function timeout()
		{
			var minute = Math.floor(timeleft/60);
			var second = timeleft%60;
			if(timeleft<=0)
			{	clearTimeout(tm);
				document.getElementById("form1").submit();
				
			}
			else
			{
				if(minute<20)
				{
					minute = "0"+minute;
				}
				if(second<10)
				{
					second = "0"+second;
				}
				document.getElementById("time").innerHTML= minute+":"+second;
			}
			timeleft--;
			var tm = setTimeout(function(){timeout()},1000);

		}

	</script>


</head>
<body onload ="if(history.length>0)history.go(+1); timeout();"> 
		
	
		<div class="main">
		<div class="container">
			<div class="current">Question No.<?php echo $question['question_number']; ?>
				<script type="text/javascript">
					var timeleft = 10;
				</script>
				<div id="time" style="float: right;">timeout</div>
			</div>
			<p class="question">
				<?php echo $question['text'];   ?>
			</p>
			<br>
			<form method="post" action="process.php" id="form1">
				
				<ul class="choices">
					<?php while($row = mysql_fetch_assoc($choices)) : ?>
				<li style="list-style-type: none;margin-left: -1%;margin-right: 2%;" >
					<input name="choice" type="submit" value="<?php echo $row['text']; ?>" id="pop"><br></li><br><br>
				<?php endwhile; ?>
				</ul>
				
		
				<input type="submit" value="NEXT QUESTION"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>"  />
			
			</form>
		</div>
	</div>






</body>
</html>

<?php
}
else{
	include('login.html');
}?>