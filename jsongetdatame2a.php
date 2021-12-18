<?php
$host="mysql.hostinger.in";
$user="u283889250_bhanu";
$password="bhanu12345";
$db="u283889250_vasav";
$sql="select * from assignment where branch='me2a';";
$con=mysqli_connect($host,$user,$password,$db);
$result=mysqli_query($con,$sql);
$response=array();
while($row=mysqli_fetch_array($result)){
	array_push($response,array("id"=>$row[0],"name"=>$row[1],"branch"=>$row[2],"faculty"=>$row[3],"date"=>$row[4]));
	
	
		
}
echo json_encode(array("server_response"=>$response));
mysqli_close($con);

?>