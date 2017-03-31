<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
if(login_check() == false)
	header('Location:../bmb/login.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
</script>


<style>
.row.content{height: auto;}
.sidespace {height: auto;}

/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
</style>

</head>
<body>
<?php require("user_navigation.php"); ?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace">
	
  </div>
  <div class="col-sm-10"   style="background-color:#ff99ff;;">
	<?php
	
	$sql="select book_id,bus_id,seat_no,book_status,bus_name,b_date
			from booking where email_id='".$_SESSION['email']."'";
	$result=$conn->query($sql);
	echo "<table class=\"table table-striped\">
			<thead><tr><td>Bus Name<td>Date<td>Status<td>Cancel Booking</tr></thead>";
	
	while($row=$result->fetch_assoc()){
		echo "<tbody><tr><td>".$row['bus_name']."<td>".$row['b_date'];
		
		if($row['book_status']==0){
			echo "<td>booked<td>
			<form method=\"post\" action=\"user_cancel_book_refresh.php\" >
			<input type=\"hidden\"  name=\"book_id\" value=\"".$row['book_id']."\">
			<input type=\"hidden\"  name=\"b_date\" value=\"".$row['b_date']."\">
			<input type=\"hidden\"  name=\"bus_id\" value=\"".$row['bus_id']."\">
			<input type=\"hidden\"  name=\"seat_no\" value=\"".$row['seat_no']."\">";
			$today_date=date("Y-m-d");
			if($row['b_date']<=$today_date)
				{echo "<input type=\"submit\" class=\"btn btn-info btn-md\" disabled></form></tr>";}
			else
				{echo "<input type=\"submit\" class=\"btn btn-info btn-md\" ></form></tr>";}
		}
		elseif($row['book_status']==1)
			echo "<td>Cancelled<td>N.A</tr>";
	}
	echo "</tbody></table>";
	

?>
	
  </div>
  <div class="col-sm-1 sidespace">
	
  </div>
 </div>
</div>


<?php echo '<br><br><br><br><br><br><br><br><br>';require("footer.php"); ?>
</body>
</html>
