<?php
$con=mysqli_connect("mysql.hostinger.in","u283889250_bhanu","bhanu12345","u283889250_vasav");
session_start();
$username= $_SESSION['myValue1'];
$password= $_SESSION['myValue2'];
$gen= $_SESSION['myValue3'];
$year=$_SESSION['myValue4'];
$section=$_SESSION['myValue5'];
$branch=$_SESSION['myValue6'];
$id=$_SESSION['myValue7'];
$get=mysqli_query($con,"SELECT * FROM serverlist WHERE id='$id' ");
 $get2= mysqli_fetch_assoc($get);
 
 $disuser=$get2['username'];
$f=$_GET['filename'];

unlink($gen.'/'.$f);
$sql = "DELETE FROM assignment WHERE filename='$f' AND branch='$gen' AND faculty='$disuser'";

mysqli_query($con, $sql); 
//session_destroy();
mysqli_close($con);
 header("Location:profile.php"); 
      
?>