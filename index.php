<?php
$con=mysqli_connect("mysql.hostinger.in","u283889250_bhanu","bhanu12345","u283889250_vasav");
$button=isset($_POST['button']);
if($button)
 { 
 $username=$_POST['username'];
 $password=$_POST['password'];
  $get=mysqli_query($con,"SELECT * FROM serverlist WHERE username='$username' AND password='$password'");
 $get2= mysqli_fetch_assoc($get);
 $num=mysqli_num_rows($get);
      if($num==1)
     {
      $id=$get2['id'];
    $email=$get2['email'];
      	  session_start();
    $_SESSION['myValue1']=$username;
     $_SESSION['myValue2']=$password;
     $_SESSION['myValue7']=$id;

      header("Location:branch.php"); 
       }
       else{ 
          echo "<script type='text/javascript'>alert('invalid credentials')</script>";}
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
    <title>innosemble </title>
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
			#username,#password { width: 250px;
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
}</style>
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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php">ABOUT</a></li>
                                        
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
                <span class="head-main" >Hi</span>
              
<form action="index.php" method="post">

username:<input type="text" id="username"name="username" placeholder="username"/>
  <br/><br/>
Password:<input type="password" id="password"name="password" placeholder="password"/>
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
    <div id="footer">
        2016 www.vasavih.netai.net | All Right Reserved  
         
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