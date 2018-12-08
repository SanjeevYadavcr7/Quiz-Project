<?php session_start();
if($_SESSION['logged_in'] == '1' ) 
{
?>



<!DOCTYPE html>
<html>
<head>
	<title>register_success</title>
	<style type="text/css">

  body{background:url(69554731-exam-wallpapers.jpg);}
		
		.box1
		{
			width: 100%;
			height: auto;
			//border:1px solid orange;
		}
		

		.box1 .box3
		{
			width:80% ;
			height:85vh ;
			border:3px solid white;
		  margin-top: 3%;
      margin-left:9%;
      background: rgba(0,0,0,0.7);
      color:white;

		}
		.box3 img{margin-top:9%;border-radius: 50%;}

		.box3 form input{width:250px ;height:50px ;border:3px solid white;border-radius: 20px;background:orange;color:white;
			font-weight: bold;font-size: 20px;;}
		.box3 form input:focus{outline:none;}	
    .box3 form input:hover{border:3px solid orange;background:white;color: orange;}

	</style>
</head>
<body>

	<div class="box1">
		<div class="box3">
		<center>
		<img src="re.png" alt="logo_success" width="80" height="80">
		
		<p style="font-family:'Roboto', sans-serif;font-size:38px;
                      font-weight:bold;color:white;margin-top: 0px;">Your Registration is successfully done! </p>
                      <br>
        <p style="font-family:'Roboto', sans-serif;font-size:25px;text-align: justify;margin-left:4%;margin-right:4%;font-weight:medium;"> Now you are also an integral part of <b>REC Quiz Event</b>.This is an Online Quiz event.&nbspNow to participate in the quiz go to login panel and login to the quiz.Enter your email and password as specified in registartion form.&nbspPlease contact us via our facebook page.</p>

        <br>
        <br>
        <br>

        <form action="a_dmin_logout.php" method="POST">
        <input type="submit" name="button" value="BACK TO HOME">
    	</form>
    	</center>


		</div>




	</div>

</body>
</html>


<?php
}
else{
  include('register2.html');
}?>