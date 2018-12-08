<?php include'database.php' ?>


<?php


$email=$_POST['email'];




$query="insert into suscribe(email) values ('$email')";
mysql_query($query);
//echo "thanks";
header("Location:suscribesucc.php");


?>
