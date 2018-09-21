<?php
session_start();
$username = $_POST['uname'];
$Password = $_POST['password'];

$username = stripcslashes($username);
$Password = stripcslashes($Password);
$username = $username;
$Password = $Password;

$conn = mysqli_connect("localhost", "root", "","sgrade_management");

$result = mysqli_query($conn,"select * from s_registration where student_id = '$username' and password = '$Password'")  or die(mysqli_error());

$row = mysqli_fetch_array($result);
if($row['student_id'] == $username && $row['password'] == $Password)
{
$_SESSION["usernames"]=$username;
header("Location:student_choice.php");



}
else
{
	//echo "Failed to login";
	echo '<script type="text/javascript">alert("Failed to login.");</script>';
}

?>