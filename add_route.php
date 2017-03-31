<?php include_once 'includes/functions.php';

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
<?php require("admin_navigation.php"); ?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
  <div class="col-sm-10"  style="background-color:#ff99ff;">
  
	<div class="col-sm-2" >
	
	</div>
	<div class="col-sm-8">
	
	<form method="get" action="includes/add_route_process.php">
	
	<div class="form-group">
      <label for="bus_no">Bus No:</label>
      <input type="text" class="form-control" id="bus_no" name="bus_no" >
    </div>
    <div class="form-group">
      <label for="bus_name">Bus Route Name:</label>
      <input type="text" class="form-control" id="bus_name"  name="bus_name">
    </div>
	<div class="form-group">
      <label for="dep_time">Departure Time:</label>
      <input type="text" class="form-control" id="dep_time"  name="dep_time">
    </div>
	<div class="form-group">
      <label for="arr_time">Arival Time:</label>
      <input type="text" class="form-control" id="arr_time"  name="arr_time">
    </div>
	<div class="form-group">
      <label for="sel1">Bus Type:</label>
      <select class="form-control" id="sel1" name="bus_type">
        <option value="ac">A.C</option>
        <option value="nonac">Non A.C</option>
      </select>
    </div>
	<div class="form-group">
      <label for="total_seat">Total Seats:</label>
      <input type="number" class="form-control" id="total_seat"  name="total_seat">
    </div>

    
    <div class="form-group">
      <label for="price">Price per Seat:</label>
      <input type="number" class="form-control" id="price"  name="price">
    </div>


    <label class="checkbox-inline">
      <input type="checkbox"  name="mon" value="1">monday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="tue" value="1">tuesday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="wed" value="1">wednesday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="thu" value="1">thrusday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="fri" value="1">friday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="sat" value="1">saturday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="sun" value="1">sunday
    </label>
	 <button type="submit" class="btn btn-primary btn-md" style="background-color:#800080;">Submit</button>
	</form>
	
	</div>
	<div class="col-sm-2" >
	
	</div>
	
  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>


<?php require("footer.php"); ?>
</body>
</html>