<?php

session_start();


    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userdetails');

$name = $_POST['user'];
$pass = $_POST['password'];
$email=$_POST['email'];

$s = "select * from usertable where name='$name' && password='$pass'& email='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num==1)
{
    $_SESSION['username']=$name;
    header('location:booking.html');
}
else
{
       echo"login failed";
}


?>