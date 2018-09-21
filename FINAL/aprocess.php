<?php
session_start();
$username = $_POST['uname'];
$Password = $_POST['password'];
/*
$username = $username;
$Password = $Password;
*/

$conn = mysqli_connect("localhost", "root", "","sgrade_management");
	
	
$result = mysqli_query($conn,"select * from alogin where aname = '$username' and apass = '$Password'") or die(mysqli_error());

$row = mysqli_fetch_array($result);
if($row['aname'] == $username && $row['apass'] == $Password)
{
	$_SESSION["username"]=$username;
	
	
header("Location:admin_choice.php");
}
else
{
	//echo "Failed to login";
	echo '<script type="text/javascript">alert("Failed to login.");</script>';
}

?>