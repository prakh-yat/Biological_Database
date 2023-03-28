<?php

$email=$_POST['email'];
$password=$_POST['password'];
$con = mysqli_connect("localhost","root","","cancer");
$sql = "select * from registration where email='".$email."' and password='".$password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
echo "Login Successful";

}
?>