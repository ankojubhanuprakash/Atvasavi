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
if(empty($username)){header("Location:index.php");}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>INNOSEMBLE </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>
<script>
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file_upload").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file_upload", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "upload2.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/ 1000000)+" Mb of "+(event.total/ 1000000);
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
	 
               
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
	
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}</script>
<style>
progress {
    background-color: #00FF00;
    
    height: 18px;
    border-radius: 9px;
}


body form {
                text-decoration: none;
                font-family: cursive;
                padding-top: 60px;
				text-align:center;
                border-radius: 15px;
                width:30%;
                height: 50%px;
                background-color: rgba(0,0,0,0.5);
                margin: 2%;
color:firebrick;
                
            }
			 body form input {
                border: 0;
                text-align: center;
                width:60%;
                height: 50px;
                border-radius: 5px;
				color:firebrick;
            }
	
			
			
			.wrap {
    width: 100%;
    height: 100%;
}

.locator {
   
    width: 56%;
      padding: 22px;
	   text-align:center;
color:white;
                height: auto;
				 border-radius: 15px;
			   background-color: rgba(0,0,0,0.5);
			     margin:5px;
				 position: absolute;
    top:-10px;
    right: 0;
}
.butt{			 position: absolute;
    top:45px;
    right: 20px;}
	.list{
	color:white;}


</style>
<body>
  <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="branch.php"><img src='assets/img/home.png' height='40'width='40'></a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                                        
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME PAGE SECTION-->
    <div id="home-sec">

    <div class="container"  >
        <div class="row ">
            <div  class="col-md-12" >
                <span class="head-main" ><?php  echo "Hey,".strtoupper(substr($disuser,0,1)).substr($disuser,1,strlen($disuser));  ?></span>

<div class="list">        
<?php
echo   "Branch  : $branch<br>Year             : $year<br>Section : $section";

?><br> Semester:<input type="radio"  name="section" value="A"checked>1  <input type="radio"name="section" value="B">2</div>

<div class="wrap" >
<div ><form align="left" id="upload_form" enctype="multipart/form-data" method="post">
 <center> <input type="file" name="file_upload" id="file_upload"></center><br><br>
  <input type="button" id="uploadbutton" value="Upload Assignment" onclick="uploadFile()"><br><br>
  <progress id="progressBar" value="0" max="100" style="width:50%;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
<p>note: file size must be less than 10 Mb</p>
</form></div>


    <div class="locator">
      <h2 style="color:white;">ASSIGNMENTS</h2>
     <table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td> File </td>
     <td>Date</td>
	<TD>Remove</TD>

    </tr>
    <?php
 $sql="SELECT * FROM assignment WHERE branch='$gen' AND faculty='$disuser' ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
 
  ?>
        <tr>
        <td><?php echo $row['filename'] ?></td>
        <td><a href="<?php echo $gen.'/'.$row['filename']; ?>" target="_blank"><img src="view.jpg"  height="24" width="24"></td>
         <td><?php echo $row['Date of upload'] ?></td>      
        <td><a href="delete.php?filename=<?php echo $row['filename'];?>" ><img src="remove.png"  height="25" width="25"></a></td>



        </tr>
        <?php
 }
 ?>
</table>
<div class="butt">	<a onclick="window.location.href='profile.php'" class="butt"><img src="reload.png"  height="50" width="50"></a>
	</div></div></div>
	
	
                 
            </div>
            
        </div>
    </div>
   
         </div>
    
    

   
   
   
       <section  >
        <div class="container">
            <h1>   Clients </h1>
                <div class="row g-pad-bottom">
                  
                    <div class="col-md-4 col-sm-4 col-xs-4">
                         
                        <img src="assets/img/c1.jpg" alt="" class="img-responsive" />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                         
                        <img src="assets/img/c2.jpg" alt="" class="img-responsive" />
                    </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                         
                        <img src="assets/img/c3.jpg" alt="" class="img-responsive" />
                    </div>
                </div>
          
        </div>
    </section>

    
  <!--END HOME PAGE SECTION-->  
     
   
   
   

    <!--FOOTER SECTION -->
    <div id="footer">
mail:innosemble@gmail.com |
        2016 www.vasavih.890m.com | All Right Reserved  
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>

