<?php include'database.php'; ?>
<?php session_start(); ?>

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

		body{background:url(69554731-exam-wallpapers.jpg);}

		.main{font-family: 'Roboto', sans-serif;border:1px solid black ;width:100%;height:650px;background:rgba(0,0,0,0.6);}
		.main .container .current{background-color:rgba(0,0,0,0.7);padding:44px;color: white;border-bottom: 4px solid white;font-size: 40px;font-weight: bold;
									margin-top: 0%;}
		.main .container .question{font-size: 20px;text-transform:uppercase;}
		.main .container form table{list-style-type: none;}
		.main .container form table tr{background:grey;width:400px;}
		.main .container form table td{width:1300px;padding: 16px 14px;background:rgba(0,0,0,0.7);border:2px solid white;border-radius: 5px;color: white;
			line-height: 1.6;font-size: 18px;}
		.main .container form table td:hover{border:3px solid #2E86C1  ;background-color: white;color:black;}
		
		
		.main .container .question{background-color:rgba(0,0,0,0.7);padding:20px;color: white;font-weight: bold;}

		.main .container form input[type="submit"]{float:right;width:200px;height:49px;margin-right: 8%;
			background-color:#3498DB  ;color:white;font-size: 19px;border:2px solid#3498DB;border-radius:3px;} 
		.main .container form input[type="submit"]:hover{background-color: white;color:#3498DB;}		

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
<body onload ="timeout()">
		
	
		<div class="main">
		<div class="container">
			<div class="current">Question No.<?php echo $question['question_number']; ?>
				<script type="text/javascript">
					var timeleft = 20;
				</script>
				<div id="time" style="float: right;">timeout</div>
			</div>
			<p class="question">
				<?php echo $question['text'];   ?>
			</p>

			<form method="post" action="process.php" id="form1">
				<table cellspacing="15">
				<ul class="choices">
					<?php while($row = mysql_fetch_assoc($choices)) :  ?>
				<tr><td><li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" ><?php echo $row['text']; ?></li></td></tr>
				<?php endwhile; ?>
				</ul>
				
			</table><br>
				<input type="submit" value="SUBMIT"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>"  />
			
			</form>
		</div>
	</div>






</body>
</html>






		