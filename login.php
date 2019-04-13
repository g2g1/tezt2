<?php
echo "it works";
$dbusername = "root";
$dbpassword = "gg.pass1.phpassass1n.";
$dbhostname = "localhost";
$dbname = "login";

$conn = mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname) or die("error 469, couldnt connect blyat");
if(!$conn){echo "connection sucks";}

if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($conn, $_POST['user']);
$password =  mysqli_real_escape_string($conn, $_POST['pass']);


	
									  
	$sql = "INSERT INTO users (username, password) VALUES('$username', '$password');";
	mysqli_query($conn, $sql);
	echo "success";
							}else{echo "isset not working";}
						    
							

	



 ?>
