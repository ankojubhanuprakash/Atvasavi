<?php

//$con=mysqli_connect("mysql.hostinger.in","u283889250_bhanu","bhanu12345","u283889250_vasav");
$con=mysqli_connect("localhost","root","","vasavi");
session_start();
$username= $_SESSION['myValue1'];
$password= $_SESSION['myValue2'];
$id=$_SESSION['myValue7'];

$get=mysqli_query($con,"SELECT * FROM serverlist WHERE id='$id' ");
 $get2= mysqli_fetch_assoc($get);
 $status=$get2['status'];
 $disuser=$get2['username'];
 if(empty($username)){header("Location:index.php");}
 if($status==0){header("Location:private.php");}
$button=isset($_POST['button']);
 if($button){

$busername=$_POST['busername'];
 $year=$_POST['year'];
 $section=$_POST['section'];
 $gen= substr("$busername", 0, 2);
 $gen="$gen"."$year"."$section";
  $get=mysqli_query($con,"SELECT * FROM users WHERE branch='$busername' AND year='$year' AND SECTION='$section' ");
  $get2= mysqli_fetch_assoc($get);
  $chooser=$get2['password'];
  if( $chooser==$gen  ){
	   $_SESSION['myValue3']=$chooser;
	   $_SESSION['myValue4']=$year;
	   $_SESSION['myValue5']=$section;
	   $_SESSION['myValue6']=$busername;
 header("Location:profile.php");
}
 }

?>

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
    
</head><style>

 body form {
color: #C0C0C0;
                text-decoration: none;
                font-family: cursive;
                padding-top: 35px;
                border-radius: 15px;
                width: 350px;
                height: 380px;
                background-color: rgba(0,0,0,0.5);
                margin: 0 auto;
                 text-align: center;
				
            }
			#busername{ width: 250px;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
	   text-align: center;
    background-color: #f1f1f1;opacity: 1.0;}
	#year{width: 250px;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;opacity: 1.0;}
	.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    cursor: pointer;
	border-radius:10px;
}
			.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
	 
}
.button2:hover {
    background-color: #008CBA;
    color: white;
	
}

.button2:active {
  background-color: #008CBA;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

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
                <a class="navbar-brand" href="index.php">LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                                       <li>       <a href="about.php"><img src='assets/img/private.png' height='40'width='40'></a></li>
                                        <li><a href="logout.php">logout</a></li>
                                        
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
                <span class="head-main" ><?php  echo "Hey,".strtoupper(substr($disuser,0,1)).substr($disuser,1,strlen($disuser)); ?></span>
              
<form action="branch.php" method="post">

Branch: <select id="busername"name= "busername" >
<option value=""></option>
<option value="mechanical">MECHANICAL</option>
<option value="eee">EEE</option>
<option value="civil">CIVIL</option>
<option value="ece">ECE</option>
<option value="it">IT</option>
<option value="cse">CSE</option>
</select><br/><br/>
Year:       <select id="year"name= "year">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option></select>
<br/><br/>
SECTION:   <input type="radio" id="section" name="section" value="a"checked>A  <input type="radio"name="section" value="b">B
  <br/><br/>
<input class="button button2" type="submit" name= "button" value="login"/>



</form>
         
                 
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
    <div id="footer">mail:innosemble@gmail.com |
        2016 www.vasavih.890m.com | All Rights Reserved  
         
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

