<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userdetails');
$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];


$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
echo"username already exist";
}
else
{
    $reg="insert into usertable(name,password,email) values('$name','$pass','$email')";
    mysqli_query($con,$reg);
    echo"Registration successfull";
    
}
?>