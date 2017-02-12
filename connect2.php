<?php 
$connection = mysqli_connect('localhost','root','Ieeew3');
if(!$connection){
	die("Database Connection Faild".mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'simple');
if(!$select_db){
	die("Select database failed".mysqli_error($connection));
}
session_start();
if(isset($_POST) & !empty($_POST)) {
  $username =mysqli_real_escape_string($connection,$_POST['username']);
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connection,$sql);
  $count = mysqli_num_rows($result);
  if($count == 1) {
  	echo "Create session";
  }
  else {
  	echo "Invalid user Name and Password";
  }
}
if(isset($_SESSION['username'])){
  echo "User already logged in";
}

?>
