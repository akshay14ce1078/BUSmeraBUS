<?php
include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();
if(login_check() == false)
	header('Location:../bmb/login.php');

$mon=$tue=$wed=$thu=$fri=$sat=$sun=0;

$place_id=$_REQUEST["place_id"];
$bus_no=$_REQUEST["bus_no"];
$bus_name=$_REQUEST["bus_name"];
$dep_time=$_REQUEST["dep_time"];
$arr_time=$_REQUEST["arr_time"];
$bus_type=$_REQUEST["bus_type"];
$total_seat=$_REQUEST["total_seat"];
$price=$_REQUEST["price"];
if(isset($_REQUEST["mon"])){
	$mon=$_REQUEST["mon"];
}
if(isset($_REQUEST["tue"])){
	$tue=$_REQUEST["tue"];
}
if(isset($_REQUEST["wed"])){
	$wed=$_REQUEST["wed"];
}
if(isset($_REQUEST["thu"])){
	$thu=$_REQUEST["thu"];
}
if(isset($_REQUEST["fri"])){
	$fri=$_REQUEST["fri"];
}
if(isset($_REQUEST["sat"])){
	$sat=$_REQUEST["sat"];
}
if(isset($_REQUEST["sun"])){
	$sun=$_REQUEST["sun"];
}









$sql1="insert into bus_route(bus_no,bus_name,dep_time,arr_time,bus_type,total_seat,price_per_seat,mon,tue,wed,thu,fri,sat,sun)
	   values('".$bus_no."','".$bus_name."','".$dep_time."','".$arr_time."','".$bus_type."',".$total_seat.",".$price.",".$mon.",".$tue.",".$wed.",".$thu.",".$fri.",".$sat.",".$sun.")";

	   

 if($conn->query($sql1) === true ){
		$bus_id = $conn->insert_id;
		$sql3="insert into bus_route_place(place_id,bus_id)values(".$place_id.",".$bus_id.")";
		$conn->query($sql3);
		header('Location:../admin_homepage.php');
}
 else{
	header('Location:../add_route.php');
 }
$conn->close();
?>