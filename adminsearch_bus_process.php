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

		require("admin_navigation.php");		

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



$sql="select *
	  from bus_route
	  where bus_id in (select bus_id
					   from bus_route_place
					   where place_id=(select place_id
									   from place
									   where src='".$src."' and des='".$des."'
									   )
						)";/* do changes*/
$result=$conn->query($sql);

 echo "<center><h3><b>$src to $des Following Routes Available</b></h3><center>";	
 echo "<table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Bus Route Name</th>
        <th>Dept Time</th>
        <th>Arr Time</th>
        <th>Mon</th><th>Tue</th>
		<th>Wed</th><th>Thu</th>
		<th>Fri</th><th>Sat</th>
		<th>Sun</th>
        
        
      </tr>
    </thead>";
    
while($row=$result->fetch_assoc()){
	if($row['sun']==1)
{$sun="A";}
else
{$sun="N.A";}
if($row['mon']==1)
{$mon="A";}
else
{$mon="N.A";}
if($row['tue']==1)
{$tue="A";}
else
{$tue="N.A";}
if($row['wed']==1)
{$wed="A";}
else
{$wed="N.A";}
if($row['thu']==1)
{$thu="A";}
else
{$thu="N.A";}
if($row['fri']==1)
{$fri="A";}
else
{$fri="N.A";}
if($row['sat']==1)
{$sat="A";}
else
{$sat="N.A";}

echo "<tbody>
      <tr>
        <td>".$row['bus_name']."</td>
        <td>".$row['dep_time']."</td>
        <td>".$row['arr_time']."</td>
        <td>$mon</td><td>$tue</td>
		<td>$wed</td><td>$thu</td>
		<td>$fri</td><td>$sat</td>
		<td>$sun</td>
        
      </tr>
	</tbody>";

}
  echo"</table>";
?>

	<div class="col-sm-12" >
	<br><br><br><br><br><br><br><br><br><br>
    </div>
	

  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>

<?php require("footer.php"); ?>
</body>
</html>

