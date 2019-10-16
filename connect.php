<?php

$password = filter_input(INPUT_POST, 'pword');
if(!empty($password)){
	$host = "localhost";
	$dbusername = "admin";
	$dbpassword = "Crafterz1";
	$dbname = "pass_dat";

	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error())
	}else{
		$sql = "SELECT password FROM pass_dat_table WHERE password = $password";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			echo "Password unsafe";
		}else{
			echo "Password safe";
		}

		%conn->close();
	}
}else{
	echo "Password cannot be empty";
	die();
}
?>