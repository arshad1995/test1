<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if(isset ($_POST["submit"])){
	 
	 $lid=$_POST["lid"];
	 $pass=$_POST["pass"];
	 $cpass=$_POST["cpass"];
	 $name=$_POST["name"];
	 $address=$_POST["address"];
	 $city=$_POST["city"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	 
 
	 $sql= "INSERT INTO users(lid,pass,cpass,name,address,city,phone,email)
	 VALUES('".$lid=$_POST["lid"]."','".$pass=$_POST["pass"]."','".$cpass=$_POST["cpass"]."','".$name=$_POST["name"]."',
	 '".$address=$_POST["address"]."','".$city=$_POST["city"]."','".$phone=$_POST["phone"]."','".$email=$_POST["email"]."')";
	 if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
	header("location:login.php");
	
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   } 
 } 
 
?>


<html>
<head>
 <style>
   td,tr {color: brown;}
   table, th, td {
 
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  font-size:20px;
}
input[type=submit]{
width: 28%;
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
  <title>Sign Up</title>
</head>
<center><body background="back.jpg">
 <h1>New User Signup</h1>
<img src="register.png" width="131" height="155" align="left">
   <form method="post" >
       <table width="301" height="250" border="0">
         <tr>
           <td>Login Id</td>
           <td><input type="text" name="lid" required></td>
         </tr>
         <tr>
           <td>Password</td>
           <td><input type="password" name="pass" required></td>
         </tr>
         <tr>
           <td>Confirm Password </td>
           <td><input name="cpass" type="password" required ></td>
         </tr>
         <tr>
           <td>username</td>
           <td><input name="name" type="text" required ></td>
         </tr>
         <tr>
           <td>Address</td>
           <td><textarea name="address" required></textarea></td>
         </tr>
         <tr>
           <td>City</td>
           <td><input name="city" type="text" required></td>
         </tr>
         <tr>
           <td>Phone</td>
           <td><input name="phone" type="text" required></td>
         </tr>
         <tr>
           <td>E-mail</td>
           <td><input name="email" type="text" required></td>
         </tr>
         <tr>
		   
           <td colspan="3" align="center"><input type="submit" name="submit" value="Sign up"></td>
         </tr>
       </table>
	   <a href="login.php" style="position:absolute;left:53%;top:70%;color:red;" >Sign In</a>
     </form>
</body></center>
</html>
