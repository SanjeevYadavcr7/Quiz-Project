<?php include'database.php' ?>
<?php session_start(); 



$pname=$_POST['pname'];
$pemail=$_POST['pemail'];
$ppass=$_POST['ppass'];



$query="insert into regcode(pname,pemail,ppass) values ('$pname','$pemail','$ppass')";
mysql_query($query);
//echo "thanks";
$_SESSION['logged_in']='1';
header("Location:regsuccess.php");


?>
