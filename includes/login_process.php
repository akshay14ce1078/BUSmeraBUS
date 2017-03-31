<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // The hashed password.

	if(true==account_status($email,$conn)){		//if no attemp is more than 3 than lock the account
		$r=login($email, $password, $conn);
		 
		if ($r == 0) {
			// Login success 
			if(login_check() == true){
				header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
				header("Cache-Control: no-cache");
				header("Pragma: no-cache");
				header('Location: ../user_homepage.php');
			}
		}
		elseif ($r == 1){
			// Login success 
			if(login_check() == true){
				header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
				header("Cache-Control: no-cache");
				header("Pragma: no-cache");
				header('Location: ../admin_homepage.php');
			}
		}
		elseif($r == 2) {
			// Login failed 
			record_attemp($email,$conn);
			echo 'invalid id or password';
			header('Location: ../login.php');
		}
		else{
			header('Location: ../login.php');
			// not valid user
		}
	}
	else{
		
		//account locked
               
		header('Location: ../login.php');

	}
} 
else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}

?>