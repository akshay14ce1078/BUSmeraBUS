<?php
include_once 'db_connect.php';

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$address=$_POST["address"];
$city=$_POST["city"];
$pin=$_POST["pin"];
$phoneno=$_POST["phoneno"];
$password=$_POST["password"];

$sql1="insert into registered_user(f_name,l_name,email_id,address,city,pin,ph_no)
						values('".$fname."','".$lname."','".$email."','".$address."','".$city."',".$pin.",".$phoneno.")";
$sql2="insert into login_record(email,user_name,pass_key)values('".$email."','".$fname."','".$password."')";

$sql3="insert into login_attemp(email)values('".$email."')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($conn->query($sql1) == true && $conn->query($sql2) == true && $conn->query($sql3) == true){
	header('Location:../register_successful.php');
}
else{
	header('Location:../register_user.php');
}

$conn->close();
?>