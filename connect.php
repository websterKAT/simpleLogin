<?php 
$connection = mysqli_connect('localhost','root','Ieeew3');
if(!$connection){
	die("Database Connection Faild".mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'simple');
if(!$select_db){
	die("Select database failed".mysqli_error($connection));
}

if(isset($_POST) & !empty($_POST)) {
  $username = mysqli_real_escape_string($connection,$_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = md5($_POST['password']);
  $sql = "INSERT INTO `users` (username,email,password) VALUES ('$username','$email','$password')";
  $result = mysqli_query($connection,$sql);
  if($result) {
  	echo "User Registration Sucessfull";
  }
  else {
  	echo "User Registration Failed";
  }
}
?>
