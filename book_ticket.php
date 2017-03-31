<?php  
include_once 'includes/functions.php';
	$c=0;
	sec_session_start();
	if(login_check() == false){
		$c=1;
		header('Location:login.php');
	}
?>


<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<?php 
if(isset($_SESSION['acc_type']))
{
	if($_SESSION['acc_type'] == 0)
		require("user_navigation.php");
	else
		require("admin_navigation.php");		
}
else
{
	require("navigation.php");
}
echo '<br><br>';
?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
  <div class="col-sm-10" style="background-color:#ff99ff;">
	<?php
	include_once 'includes/db_connect.php';
	
	if($c==0){
		$bus_id=$_POST["bus_id"];
		$bdate=$_POST["bdate"];
		$day=$_POST["day"];
		
		$result=$conn->query("select ava_seat from booking_ava_seats where bus_id=".$bus_id." and date='$bdate'");
		
		if($result->num_rows == 0){
			echo "<h3>all seats available</h3>";
		
		}
		else{
			$row=$result->fetch_assoc();
			echo "<h3>total seats available=".$row['ava_seat']."</h3>";
		}
		
		echo "<br><form method=\"post\" action=\"confirm_book.php\">
			<div class=\"form-group\">
				<label for=\"sel1\">Enter Number Of Seats:</label>
				<input type=\"number\" class=\"form-control\" id=\"sel1\" name=\"no_of_seat\">
			</div>";
		echo "<input type=\"hidden\" name=\"bus_id\" value=".$bus_id." >
			<input type=\"hidden\" name=\"bdate\" value=\"".$bdate."\">
			<input type=\"hidden\" name=\"day\" value=\"".$day."\">
			<button type=\"submit\" class=\"btn btn-primary\" style=\"background-color:purple\">Submit</button>
			</form>";			
	}
	?>
  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>


<?php echo '<br><br><br>'; require("footer.php"); ?>
</body>
</html>