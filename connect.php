<?php
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$gender = $_POST['gender'];

echo $name;
echo $username;
echo $email;
echo $number;
echo $password;
echo $gender;

$con = mysqli_connect ("localhost","root","","cancer");

$sql = "insert into registration(name,username,email,number,password,gender) values('".$name."','".$username."','".$email."','".$number."','".$password."','".$gender."')";
echo "o";
mysqli_query ($con,$sql);
echo "o";
mysqli_close ($con);
echo "o";

?>
