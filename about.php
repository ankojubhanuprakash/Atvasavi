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
 $aname=$get2['name'];
 $aemailid=$get2['emailid'];
 if($checkpass!=$password){ echo "<script type='text/javascript'>alert('changes applied succesfully!')</script>";}
 
 ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title> </title>
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
    
</head><script src="bhanu.js"></script>
<script src="bhkeerthi.js"></script>
 <style>	.button {
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

</style>
<body>
  <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.php">LOGO</a>
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
    
    <!--ABOUT PAGE SECTION-->
    
    <div class="container"  >
        <div class="row top-pad">
            <div  class="col-md-12" >
                <h1 > Account</h1>          
                         
            </div>
          
        </div>
    </div>
   
    <section >
        <div class="container">
            <div class="row">
                  
                    <div class="col-md-7 col-sm-7">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst"> DETAILS  </h4>
                            <p>
                                <table> <tr><td><strong>Name:</strong><?php echo $aname;?></td></tr><br />
                            <tr><td> <strong>Username:</strong><?php echo $username; ?> </td><td><button onclick="myFunction('dusername');">edit</button></td></tr><br>
                             <tr><td><strong>Email id:</strong><?php echo $aemailid;?> </td><td><button onclick="myFunction('demail');">edit</button></td></tr><br>
                             <tr><td><strong>Password:</strong>******** </td><td><button onclick="myFunction('dpass');">edit</button></td></tr>
                                 </table>
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                <div class="col-md-5 col-sm-5">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">STATUS </h4>
                                <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
    <span class="sr-only">40% Complete (success)</span>
      ACTIVE
  </div>
</div>

                            </div>
                              </div>
                    </div>
                </div>
             <div class="row f-s" >
                  
                    <div class="col-md-12 col-sm-12">
                          <div  class="panel panel-default">
                       <div id="wrap">
                 <table><tr><td>      <div style="visibility:hidden" id="dusername" ><form onSubmit="return valuser();"   action="changea.php" method="post">
username: <input type="text" id="username" name="username" />
<input type="hidden" name="part" value ="username"/><br><br>
  <center> <input class="button button2"type="submit" value="submit"/></center>
</form></div></td>
<td>       <div style="visibility:hidden" id="demail"><form onSubmit="return valemail();" action="changea.php" method="post">
email: <input type="text" id="email" name="email" />
<input type="hidden" name="part" value ="email"/><br><br>
   <center><input class="button button2"type="submit" value="submit"/></center>
</form></div>                                  </td>


<td>
    <div style="visibility:hidden"id="dpass"class="locator">
      
	  <form onSubmit="return validate('<?php echo $checkpass;?>');" method="post" action="changea.php">
   <center>  Old password: <input type="password" id="password0" name="password0" /><img id="image0" src="assets/img/tra.png" width="40" height="40"><br><br><br>
    Password: <input type="password" id="password1" name="password1" /><br/><br/><br>
    Re-enter Password: <input type="password" id="password2" name="password2" /><img id="image" src="assets/img/tra.png" width="40" height="40">
	<input type="hidden" name="part" value ="password"/><br><br><br>
    <input class="button button2"type="submit" value="submit"/></center>
    </form>
	  
	  
	  
	  </div></td></tr></table></div>
                    </div> 
                            
                    </div>
              
                 </div>
                <div style="visibility: hidden;"  class="row">
                  
                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">ACADEMICS DETAIL  </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">WORK EXPERIENCE</h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">TECHNOLOGIES USED </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                </div>
                        
        </div>
    
    </section>
   
       

    
  <!--END ABOUT PAGE SECTION-->  
     
   
   
   

    <!--FOOTER SECTION -->
    <div id="footer">
        2014 www.yourdomain.com | All Right Reserved  
         
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