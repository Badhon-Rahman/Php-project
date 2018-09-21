<html>
<meta charset="UTF-8">
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
		.button2:hover {
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
	<center>
	<head>
	<h1 style="font-family:georgia; color:red;">BIDDA NEKATON</h1>
	<h2>Admin Login</h2>
	<script type ="text/javascript">
	function check_info()
	{
		var username = document.getElementById("uname").value;
		var password = document.getElementById("password").value;
		
		if(username =="" || password =="")
		{
			alert("Please fill in all fields");
			return false;
		}
		else
		
			return true;
		}s
	}
	</script>
	</head>
	<body>

<p style="font-family:georgia; color:red;">Sign in with your organizational user name.</p>
	    <div class="inputBox">
       <form method ="post" onsubmit ="return check_info();" action="aprocess.php">
            <table>
                <tr><td>User Name :</td><td> <input type="text"     name="uname" placeholder ="UserID"/></td></tr><br>
      
                <tr><td>Password:</td><td> <input type="password" name="password" Placeholder = "Password" /></td></tr>
           
                </td></tr>
            </table><br>
			<button class="button button2">Login</button>
        </form>
    </div>
		<form method ="post" action="choice.php">
	<input class="button" type = "submit" Value="<-Back"/>
	
	</form>
	
	</body>
	</center>
</html>