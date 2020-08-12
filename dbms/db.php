<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userdetails');
$name=$_POST['name'];
$country=$_POST['country'];
$checkin=$_POST['in'];
$checkout=$_POST['out'];


    $reg="insert into book(name,country,checkin,checkout) values('$name','$country','$checkin','$checkout') ";
    mysqli_query($con,$reg);
    echo"BOOKED";
?>