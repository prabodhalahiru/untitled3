<?php include 'config.php';

	$json = file_get_contents('php://input');
	$obj = json_decode($json,true);

	$email = $obj['userName'];

	$password = $obj['password'];

	if($obj['userName']!=""){

	$result= $mysqli->query("SELECT * FROM users where userName='$userName' and password='$password'");

		if($result->num_rows==0){
			echo json_encode('Wrong Details');
		}
		else{
		echo json_encode('ok');
		}
	}
	else{
	  echo json_encode('try again');
	}

?>