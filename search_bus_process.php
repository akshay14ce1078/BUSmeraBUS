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

		require("user_navigation.php");

echo '<br><br>';
?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
  <div class="col-sm-10"  style="background-color:#ff99ff;">
				
<?php
include_once 'includes/db_connect.php';

$src=$_POST["source"];
$des=$_POST["dest"];
$bustype=$_POST["bus_type"];

$bdate=$_POST["date"];
$timestamp=strtotime($bdate);
$day=date("D",$timestamp);

$sql="select bus_id,bus_name,dep_time,arr_time,total_seat
	  from bus_route
	  where bus_id in (select bus_id
					   from bus_route_place
					   where place_id=(select place_id
									   from place
									   where src='".$src."' and des='".$des."'
									   )
						) and ".$day."=1 and bus_type='".$bustype."'";/* do changes*/
$result=$conn->query($sql);
	
 echo "<table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Bus Name</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
        <th>Total/Available Seats</th>
        <th>BookTicket</th>
        
      </tr>
    </thead>";
    
while($row=$result->fetch_assoc()){
echo "<tbody>
      <tr>
        <td>".$row['bus_name']."</td>
        <td>".$row['dep_time']."</td>
        <td>".$row['arr_time']."</td>
        <td>".$row['total_seat']."</td>
        <td><form method=post action=book_ticket.php>
			<input type=\"hidden\" name=\"bus_id\" value=".$row['bus_id'].">
			<input type=\"hidden\" name=\"bdate\" value=".$bdate.">
			<input type=\"hidden\" name=\"day\" value=".$day.">
			<input type=\"submit\"value=\"book ticket\" class=\"btn btn-primary btn-md\" style=\"background-color:purple;\">
			</form>
		</td>
      </tr>
	</tbody>";

}
  echo"</table>";
?>


  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>

<?php echo '<br><br><br><br><br><br><br><br><br>'; require("footer.php"); ?>
</body>
</html>

