<?php
$con=mysqli_connect("mysql.hostinger.in","u283889250_bhanu","bhanu12345","u283889250_vasav");
session_start();
$id=$_SESSION['myValue7'];
 $password= $_SESSION['myValue2'];
if(empty($id)){header("Location:index.php");}
$get=mysqli_query($con,"SELECT * FROM serverlist WHERE id='$id' ");
 $get2= mysqli_fetch_assoc($get);
 $username=$get2['username'];
  $status=$get2['status'];
 $checkpass=$get2['password'];
 if($checkpass!=$password){ echo "<script type='text/javascript'>alert('changes applied succesfully!')</script>";}
 if($status==0){ echo "<script type='text/javascript'>alert('change your details')</script>";}
 ?>

<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>innosemble </title>
    <!--REQUIRED STYLE SHEETS-->   <link href="assets/css/bootstrap.css" rel="stylesheet" />
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
    
</head><script> function validate(){
	
           var d = '<?php echo $checkpass; ?>';
        var a = document.getElementById("password1").value;
        var b = document.getElementById("password2").value;
		var c=document.getElementById("password0").value;

                      if(a=== "") {
                                     return false; }                 

       else  {
		if(c!=d){
			document.getElementById("image0").src = "remove.png";
			return false;
		}
        if ( (a!=b)) {
			document.getElementById("image").src = "remove.png";
			
        
        return false;
        }
	}	
    }</script>
	<style>body{
 background-image: url("assets/img/1.jpg");	
background-repeat:no-repeat; 
background-size: cover;color: white;
	}
		
.locator2 {
   
    width: 35%;
      padding: 22px;
	   text-align:center;
color: #C0C0C0;
                
				font-size:15px;
				height: auto;
				 border-radius: 15px;
			   background-color: rgba(0,0,0,0.5);
			     margin:5px;
				 position: absolute;
    top:100px;
    left:25px;
}
		
.locator {font-size:15px;
   
    width: 56%;
      padding: 22px;
	   text-align:center;
color: #C0C0C0;
                height: auto;
				 border-radius: 15px;
			   background-color: rgba(0,0,0,0.5);
			     margin:5px;
				 position: absolute;
    top:100px;
    right: 0;
}
		
			#username,#password1,#password2,#password0 { width: 250px;
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
	.footer{position:;
	bottom:0px;}
	
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
<body  >
  <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
           <font color="white">     <a class="navbar-brand" href="index.php">LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="branch.php"><img src='assets/img/home.png' height='40'width='40'></a></li>
                    <li><a href="logout.php">LOGOUT</a></li>                   
                </ul>
            </div></font>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME PAGE SECTION-->
    <div id="home-sec">

    <div class="container"  >
        <div class="row ">
            <div  class="col-md-12" >
                <span class="head-main" ><?php  echo "Hey,".strtoupper(substr($username,0,1)).substr($username,1,strlen($username)); ?></span>
  <div class="wrap" >
<div class="locator2"><form  action="change.php" method="post">
username: <input type="text" id="username" name="username" />
<input type="hidden" name="part" value ="username"/><br><br>
   <input class="button button2"type="submit" value="submit"/>
</form></div>


    <div class="locator">
      
	  <form onSubmit="return validate();" method="post" action="change.php">
     Old password: <input type="password" id="password0" name="password0" /><img id="image0" src="assets/img/tra.png" width="40" height="40"><br><br><br>
    Password: <input type="password" id="password1" name="password1" /><br/><br/><br>
    Re-enter Password: <input type="password" id="password2" name="password2" /><img id="image" src="assets/img/tra.png" width="40" height="40">
	<input type="hidden" name="part" value ="password"/><br><br><br>
    <input class="button button2"type="submit" value="submit"/>
    </form>
	  
	  
	  
	  </div></div>
         
                 
            </div>
            
        </div>
    </div>
   
         </div>
    
    

   
   
   
      

    
  <!--END HOME PAGE SECTION-->  
     
   
   
   

    <!--FOOTER SECTION -->
    
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