
<html>
<head>
<title>table diaplay</title>
<link rel="stylesheet" type="text/css" href="home.css">
    
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
<body>
    <div class="container">
    <a class="float-right" href="home.html"><h5><i class="fas fa-sign-in-alt"></i>HOME </h5></a>
        <h3> PACIFIC HOTEL-ROOM BOOKED DETAILS </h3><br>
     
        <html>
    <head>
    
<style>
    body{
        background:url(bg2.jpg);
        background-size: cover;
        font-size: 25px;
        color: aliceblue;
    }
    table,th,td{
        border:1px solid white;
        width:1100px;
        
        
    }
    .btn{
        width:10%;
        height:5%;
        font-weight: bold;
    }
        </style>
    </head>
<body>
    <table>
    <center>
<div class="container">
    <form action="" method="POST">

        <tr>
        <th>NAME</th>   
        <th>COUNTRY</th>   
        <th>CHECK-IN DATE </th>   
        <th>CHECK-OUT DATE</th>   
        
        </tr>
            <input type="submit" class="btn" name="search" value="SEARCH DATA"><br>
        </form>
 <?php
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userdetails');
if(isset($_POST['search']))
{
$query= "SELECT * FROM book";
$query_run= mysqli_query($con, $query);   
while($row = mysqli_fetch_array($query_run))
{
?>
<tr>
   <td><?php echo $row['name'] ?></td>
   <td><?php echo $row['country'] ?></td>
   <td><?php echo $row['checkin'] ?></td>
   <td><?php echo $row['checkout'] ?></td>
   
    </tr>
<?php
    
}
}

 ?></div>
    </center>
    </table>
        </body>
</html>
    </div>
    </body>
</html>
