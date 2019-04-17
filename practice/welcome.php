<?php
session_start();
if($_SESSION["name"]==true){
echo "Welocome"."  " .$_SESSION["name"];
}
else
{
	header("location:login.php");
}
?>

<a href="logout.php" style="position:absolute;right:10;">Sign Out</a>

