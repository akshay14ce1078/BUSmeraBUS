<?php

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();
if(login_check() == false)
	header('Location:../bmb/login.php');

$src=$_POST['src'];
$des=$_POST['des'];

$sql="insert into place(src,des)values('".$src."','".$des."')";
if($conn->query($sql)){
	header('Location:../admin_homepage.php');
}
else{
	echo "<b>Failed to add new Source:Destination as this already exist.<br>Please go to add route to Source:Destination on home page<b><br>";
	echo "to go to home page<a href=\"../admin_homepage.php\">click here</a>";
}

?>