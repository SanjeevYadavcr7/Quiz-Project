<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;

		//get total no. of qns
		$query = "select * from questions";
		$results = mysql_query($query);
		$total = mysql_num_rows($results);

		/*
		Get correct choice
		*/
		$query = "select * from choices where question_number = $number and is_correct = 1";
		//get result
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		$correct_choice = $row['text'];

		$_SESSION['logged_in']='1';
		//compare and add to score
		if($correct_choice == $selected_choice){

			$_SESSION['score']++;
		}
        
			//echo $total;

		if($number == $total){
			header("Location:finalizer.php");
			exit();
		}
		else{

			header("Location:ques2.php?n=".$next);
		}
		
	}

http://cssreel.com/Website/quiz-editor