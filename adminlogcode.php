<?php include'database.php' ?>
<?php session_start(); 

$admin = $_POST['admin'];
$adpass = $_POST['adpass'];

$query = "select * from adcode where admin = '$admin' and adpass = '$adpass'";
$result = mysql_query($query);

if($row=mysql_fetch_array($result,MYSQL_BOTH))
{

	$_SESSION['logged_in']='1';
    header("Location:admin.php");

}
else
{
	header("Location:adminlog.html");
}

?>


