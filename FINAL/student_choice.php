<?php require("mysql-to-json.php"); 

session_start();
if(isset($_SESSION["usernames"]))
{

?>
<html>
<head>
<style> 
/* round head */ 
#rcorners2 {
    border-radius: 25px;
    border: 2px solid #1E90FF;
    padding: 20px; 
    width: 1270px;
    height: 70px;    
}
/* nav bar */

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#1E90FF;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
}

.active {
    background-color: orangre;
}



div { margin: 20px; }


/* select combo */
.slate   { backg1round-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }

#mainselection select {
   border: 0;
   color: #0000FF;
   background: transparent;
   font-size: 20px;
   font-weight: none;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;

}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #1E90FF url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}
/* scroll */
#scroll {
    background-color: #eee;
    width: 1270px;
    height: 300px;
    border: 4px dotted blue;
    overflow: scroll;
	position:scroll;
	left:100px;
}
/*regbar */
#regbar  {
	width: 1270px;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1E90FF;
}

/*regestration on scrool*/
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   color:#0000FF;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}
//start
	  body{
    margin:10px 30%;
    background-image: url("login.jpg");
	background-size:     cover;
    background-repeat:   no-repeat;
    background-position: 0% 0%;  
  }
        .inputBox{
            width : 30%;
            /*margin: 0% 40% 0% 40%;*//*this one also works*/
            margin: 15% auto;
            /*border: 1px solid red;*/
        }
        .inputBox form table tr td{
            border: 1px solid yellow;
        }
        #submit{
            width:100%;
        }
        .error{
            text-align: right;
        }
		.button:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
		.button {
    background-color: blue; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

</style>
</head>
<center>
	<title>Student Choice</title>
	
	
	<body>
	
	<div id="rcorners2">
	<ul>
	<li><a class="active" href="student_choice.php">BIDDA NIKETON</a></li>
	<li><input class="button" name = "grade" id ="grade" value = "Grade Access" type = "button" onclick="showgrade()"/></br></br></li>
	<li><input class="button" name = "account" id ="account" value = "Student Account" type = "button" onclick="showaccount()"/></br></br></li>
	<li style="float:right"><a href="student_login.php"></br></br>Log Out</a></li>
	 </ul>
    </div>

<?php

	

			$locdata= getJSONFromDB("select * from s_gradesub,s_registration where s_gradesub.student_id=s_registration.student_id and s_gradesub.student_id=".$_SESSION["usernames"]);
			$ljson=json_decode($locdata,true);
			$str2="<table border='1px' width='90%'><tr> <td>Student Name</td><td>Bangla</td><td>English</td><td>Math</td><td>Religion</td><td>Physics</td><td>Chemistry</td><td>Biology</td></tr>";
			for ($i=0;$i<sizeof($ljson);$i++)
			{
	
					$str2=$str2."<tr> <td>".$ljson[$i]["first_name"]." ".$ljson[$i]["last_name"]."</td><td>".$ljson[$i]["Bangla"]."</td><td>".$ljson[$i]["English"]."</td><td>".$ljson[$i]["Math"]."</td><td>".$ljson[$i]["Religion"]."</td><td>".$ljson[$i]["Physics"]."</td><td>".$ljson[$i]["Chemistry"]."</td><td>".$ljson[$i]["Biology"]."</td></tr>";
		
			}
			$str2=$str2."</table>";	
			
			

?>


<span id="image_table" style="display: none; margin: 0px auto;visibility:hidden;width:80%"><?php echo $str2; ?></span>

<?php

        $id= $_SESSION["usernames"];

			$locdata= getJSONFromDB("select * from payment where student_id='".$id."'");
			$ljson=json_decode($locdata,true);
			$str2="<table border='1px' width='90%'><tr> <td>Student Name</td><td>Student Id</td><td>Class</td><td>Total Ammount</td><td>Paid</td><td>Due</td></tr>";
			for ($i=0;$i<sizeof($ljson);$i++)
			{
				
					$str2=$str2."<tr> <td>".$ljson[$i]["s_name"]."</td><td>".$ljson[$i]["student_id"]."</td><td>".$ljson[$i]["class"]."</td><td>".$ljson[$i]["total_amount"]."</td><td>".$ljson[$i]["paid"]."</td><td>".$ljson[$i]["due"]."</td></tr>";
		
			}
			$str2=$str2."</table>";	

?>

<span id="accountshow" style="display: none; margin: 0px auto;visibility:hidden;width:80%"><?php echo $str2; ?></span>


</body>

</center>

</html>



<?php
}
else
{
	session_destroy();
	header("Location:student_login.php");
}
?>


<script type="text/javascript">

function showgrade()
{		
		document.getElementById("image_table").style.display = "inline-block";
		document.getElementById("image_table").style.visibility = "visible";
		document.getElementById("accountshow").style.visibility = "hidden";
		document.getElementById("accountshow").style.display ='none';
}

function showaccount()
{		
		document.getElementById("accountshow").style.display = "inline-block";
		document.getElementById("accountshow").style.visibility = "visible";
		document.getElementById("image_table").style.visibility = "hidden";
		document.getElementById("image_table").style.display ='none';
}
</script>