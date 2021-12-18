<?php
$con=mysqli_connect("mysql.hostinger.in","u283889250_bhanu","bhanu12345","u283889250_vasav");
session_start();
$id=$_SESSION['myValue7'];
$part=$_POST['part'];
if($part=='username'){
$nusername=$_POST['username'];
$sql="UPDATE serverlist SET username='$nusername' WHERE id='$id'  ";
$que=mysqli_query($con,$sql); header("Location:about.php");exit;
}
else if ($part=='email'){$nemailid=$_POST['email'];
$sql="UPDATE serverlist SET emailid='$nemailid' WHERE id='$id'  ";
$que=mysqli_query($con,$sql);header("Location:about.php");exit;
}
      else if($part=='password'){
	         $npassword=$_POST['password1'];
	    
  	 	 $sql="UPDATE serverlist SET password='$npassword' WHERE id='$id'  ";
    $que=mysqli_query($con,$sql);
    $sq="UPDATE serverlist SET status='1' WHERE id='$id'  ";
    $qu=mysqli_query($con,$sq);header("Location:about.php");exit;
   

     }








?>