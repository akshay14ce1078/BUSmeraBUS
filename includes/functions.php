<?php
include_once 'psl_config.php';
 
function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name
    session_name($session_name);
    session_start();            // Start the PHP session 
}


function login($email,$password,$conn) {
    $result=$conn->query("SELECT email,user_name,pass_key,type FROM login_record WHERE email ='".$email."' LIMIT 1");
	
		
	
	if($row=$result->fetch_assoc()){	//to fetch result in assocative array
		


		if( $password == $row['pass_key'] ) {
			$make_attemp0_result=$conn->query("update login_attemp set attemp=0 where email='".$email."'");//if login sucess makeattemp as 0
			$_SESSION['credential']=$row['user_name'];
			$_SESSION['email']=$row['email'];
			$_SESSION['login_status']="loggedin";
			$_SESSION['acc_type']=$row['type'];
			if($row['type']==0)
				return (0);//he is user
			else
				return (1);//he is admin
			}
		else
			return (2);
	}
	else
		return (3);
	$conn->close();
}

function login_check(){
	if(	$_SESSION['login_status']=="")
		return false;
	else
		return true;
}

function account_status($email,$conn){
	$result=$conn->query("select account_state from login_record where email='".$email."'");
	while($row=$result->fetch_assoc()){
		if($row['account_state']==0)
			return true;
		else
			return false;
	}
	$conn->close();
}

function record_attemp($email,$conn){
	$inc_attemp_result=$conn->query("update login_attemp set attemp=attemp+1 where email='".$email."'");
	$result=$conn->query("select id,attemp from login_attemp where email='".$email."'");
	while($row=$result->fetch_assoc()){
		if($row[attemp]>=3){
		$lock_result=$conn->query("update login_record set account_state=1 where email='".$email."'");
               $id=$row['id'];
               $mail_to=$email;
               $mail_subject="BUSmeraBUS unlock your account";
               $mail_body = "This is the email to unlock your account.\n";
               $mail_body.="Click the following link to activate your account.\n";
               $mail_body.="<a href='busmerabus.comxa.com/activation-form.php?id=$id'>Click here</a>";
                mail($mail_to,$mail_subject,$mail_body, "From:akshaydeoghare8@gmail.com");
               

			
		}
	}
	$conn->close();
}
?>