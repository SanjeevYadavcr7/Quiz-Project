<?php include'database.php' ?>

<?php session_start();

$pemail = $_POST['pemail'];
$ppass = $_POST['ppass'];

$query = "select * from regcode where pemail = '$pemail' and ppass = '$ppass'";
$result = mysql_query($query);

if($row=mysql_fetch_array($result,MYSQL_BOTH))
{

	$_SESSION['logged_in']='1';
    header("Location:exohome.php");

}
else
{
	header("Location:login.html");
}



?>













?>