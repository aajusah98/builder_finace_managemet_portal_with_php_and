<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
if(empty($_POST['user']) || empty($_POST['pass'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$user=$_POST['user'];
$pass=$_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "alkabuilder";
$conn = mysqli_connect($servername, $username, $password,$db);
$query = mysqli_query($conn, "SELECT * FROM admin WHERE password='$pass' AND username='$user'");
$rows = mysqli_num_rows($query);
if($rows == 1){
  $_SESSION["user"]=$user;
header("Location: welcome.php?bname=Nabil Bank Ltd"); // Redirecting to other page
}
else
{
$error = "Username of Password is Invalid";
}
mysqli_close($conn); // Closing connection
}
}
?>
