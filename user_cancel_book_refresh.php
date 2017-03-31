


<?php
include_once 'includes/db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$book_id=$_POST["book_id"];
	$bus_id=$_POST["bus_id"];
	$b_date=$_POST["b_date"];
	$no_seats=$_POST["seat_no"];
	
	
	if($conn->query("update booking set book_status=1 where book_id=".$book_id)){
		if($conn->query("update booking_ava_seats set ava_seat=ava_seat+$no_seats where bus_id=$bus_id and date='$b_date'")){
			echo "<h2 align=\"centre\">BOOKING CANCELLED WAIT FOR 3 SECONDS YOU WILL BE REDIRECTED<h2>";
			header('refresh:3;user_cancel_book.php');
		}
	}
	
	
}
echo "<h2 align=\"centre\">BOOKING  NOT CANCELLED WAIT FOR 3 SECONDS YOU WILL BE REDIRECTED<h2>";

header('refresh:3;user_cancel_book.php');
?>