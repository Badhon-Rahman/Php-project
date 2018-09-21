<?php
session_start();
$userid = $_POST['uid'];


$username = stripcslashes($username);


$conn = mysqli_connect("localhost", "root", "", "sgrade_management");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	$sql = "DELETE FROM s_registration WHERE  student_id = ".$userid;
	
	
	//echo $sql;
	
	if (mysqli_query($conn, $sql)) {
		
		$sql2 = "DELETE FROM s_gradesub WHERE  student_id = ".$userid;
		if (mysqli_query($conn, $sql2)) {
		
		echo "Records deleted successfully";
		
		header("Location:deleteInfo.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		
		echo "Records deleted successfully";
		
		header("Location:deleteInfo.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


mysqli_close($conn);


?>

