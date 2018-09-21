<html>
<center>
	<head>
<style>	
 body{
    margin:15px 30%;
	background-color:#5cd65c;
	color:black;
    //background-image: url("login.jpg");
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
    background-color: black; 
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
	<h1 style="font-family:georgia; color:red;">BIDDA NEKATON</h1>
	</head>
	<body>
	
	<input class="button" name = "teacher" id ="teacher" value = "Teacher" type = "button" onclick ="teacher()"/></br></br></br>
	<input class="button" name = "student" id ="student" value = "Student" type = "button" onclick="student()"/></br></br></br>
	<input class="button" name = "admin" id ="admin" value = "Admin" type = "button" onclick="admin()"/>
	
	</body>
	
</center>

</html>


<script type="text/javascript">
function teacher()
{
	location.href="teacher_login.php";
}

function student()
{
	location.href="student_login.php";
}
function admin()
{
	location.href="admin_login.php";
}

</script>