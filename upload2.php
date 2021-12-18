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
 $status=$get2['status'];
 $disuser=$get2['username'];
$connection = ftp_connect("ftp.vasavih.890m.com");

$login = ftp_login($connection, "u283889250.vasavi", "bhanu12345");


 if(isset($_FILES['file_upload'])){
      $errors= array();
      $file_name1 = $_FILES['file_upload']['name']; 
       $file_name=str_ireplace(" ","_",$file_name1);
      $file_size = $_FILES['file_upload']['size'];
      $file_tmp = $_FILES['file_upload']['tmp_name'];
      $file_type = $_FILES['file_upload']['type'];
$dest="$gen/$file_name"; 
      #$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
       $exploded = explode('.',$_FILES['file_upload']['name']);
 $file_ext=strtolower(end($exploded));
      $expensions= array("jpeg","jpg","png","doc", "docx","pdf","rar","zip","mp3","mp4","txt","wps","ppt","pptx","xlr","xls","xlsx");}
       
	  
                                          if($file_size<=10000000){
			  
			                   if (!$connection || !$login) { die('Connection attempt failed!'); }
                                             
                                             $keert= mysqli_query($con,"INSERT INTO assignment (filename,branch,faculty) VALUES ('$file_name','$gen','$disuser')");
                                              $source=$file_tmp;
                                              $mode="FTP_ASCII";
                                              $upload = ftp_put($connection, $dest,$source, FTP_BINARY);
                                              if($upload){     echo("success");
                                                                      }

                                               else { echo " FTP upload failed! "; }
                                                
                                                                   }
                                               ftp_close($connection);
         

		                                    
	
 
 
 
 
 





?> 	