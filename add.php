<?php include'database.php' ?>
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
	$choices[5]=$_POST['choice5'];

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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>PHP QUIZ</title>
	
	<style>
	main .container{width: 60%;}
		main form label{display: inline-block;width:170px;}
		main form input[type="text"]{width:70%;height:30px;border-radius:5px;border:1px #000 solid;padding:4px;}
		main form input[type="number"]{width:9%;height:30px;border-radius:5px;border:1px #000 solid;padding:4px;}
	</style>
</head>
<body>
	
	<main>
		<div class="container" style="border:1px solid black;">
			<h1>Add A Question</h1>
			<?php
			if(isset($msg))
			{
				echo '<p>'.$msg.'</p>';
			}
			?>
			<form method="post" action="add.php">
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
				<p>
				
					<input type="submit" name="submit" value="Submit" />

				</p>


			</form>
		</div>
	</main>
	

</body>
</html>