<?php

require_once "test.php";
$loginURL = $gClient->createAuthUrl();

?>


<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_REQUEST["submit"] ))
{
	$name=$_REQUEST["name"];
	$pass=$_REQUEST["pass"];
	$sql = "SELECT * FROM users WHERE name='$name' && pass='$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$_SESSION["name"]=$name;
       header('location:welcome.php');
    }
} else {
    echo "Invalid username or password";
}

$conn->close();
}
?>

<html>
<head>
<title>Sign In</title>
  <style>
td,tr {
	color: white;
   }
input[type=text],input[type=password]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 2px solid #ccc;
padding-left: 8px;
font-size: 20px;
font-family:raleway;
border-radius: 8px;
}
  
 td {
  padding: 10px ;
  
}

input[type=submit]{
width: 100%;
background-color:#FFBC00;
color: white;
border: 1px solid #FFCB00;
padding: 5px;
font-size:16px;
cursor:pointer;
border-radius: 8px;
margin-bottom: -12px;
}
  </style>
  </head>
<body background="loginn.jpg">
<form method="post">
<!-- <img src="login.jpg" width="300" height="500" style="position:absolute;right:21%;top:15%; "> -->

 <table  align="center">
	<tr>
       <td style="position:absolute;left:22%;top:36%; ">Username<input type="text" name="name" required></td>
   </tr>
   <tr>
    <td style="position:absolute;left:22%;top:50%;">Password<input type="password" name="pass" required></td>
   </tr>
   <tr>
    <td align="center" style="position:absolute;left:30%;top:70%; "><input type="submit" value="Sign in" name="submit"></td>
   </tr>
   <tr>
   <td>
   </td>
   <h6 style="position: fixed;top:75%;left:49%;">or</h6>
		 <div class="col">         
         <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Login with Google+" class="google btn" name="gmail">
		</div>
   </tr>
    </table>
	<h4 style="position:absolute;left:31%;top:77%;color:orange;">or<h4>
	<a href="registerform.php" style="position:absolute;left:31%;top:86%;color:red;" >New User</a>
   </form>
   

 </body>
</html>

