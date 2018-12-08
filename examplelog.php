<?php include'database.php' ?>
<?php
session_start(); // Starting Session
//$error=''; // VariabTo Store Error Message


if (isset($_POST['submit1'])) {
if (empty($_POST['pemail']) || empty($_POST['ppass']))
{
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$pemail=$_POST['pemail'];
$ppass=$_POST['ppass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
$pemail = stripslashes($pemail);
$ppass = stripslashes($ppass);
$pemail = mysql_real_escape_string($pemail);
$ppass = mysql_real_escape_string($ppass);
// SQL query to fetch information of registerd users and finds user match.
$query ="select * from users where pemail='$pemail' AND ppass='$ppass'";
$result = mysql_query($query);
if ($row=mysql_fetch_array($result,MYSQL_BOTH)) {
$_SESSION['user']=$pemail; // Initializing Session
header("location:exohome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($conn); // Closing Connection
}
}
?>