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
  
  <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
  <style>
.row.content{height: 400px}
.sidespace {height: 100%;}
/* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidespace {height:auto;}
      .row.content {height:auto;} 
    }
/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
		li
	{
		text-decoration:none;
		color:white;
	}
	li a:hover
	{
		color:#4d004d;
		text-decoration:none;
	}
	
</style>
</head>
<body>
<div class="alert alert-success">
  <strong>Logged in as <?php echo $_SESSION['credential']; ?></strong>
</div>
<?php require("user_navigation.php"); echo '<br>';?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
  <div class="col-sm-10" >
 		<div  >
		<p><h2>Welcome  <?php echo $_SESSION['credential']; ?></h2></p>
         </div> 
		
	    <div class="col-sm-5"  style="background-color:white;">
			<?php require("search_bus.php");?>
		</div>
        	
		<div class="col-sm-7" style="background-color:#e699ff;"> 
			<br>
			<ul class="nav nav-pills nav-justified" role="tablist">
				<li><a href="feedback.php" ><h4>Provide Feedback</h4></a></li><br>
				<li><a href="user_cancel_book.php"><h4>Cancel Booking</h4></a></li><br>      
			</ul>
		</div>
  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>
<?php require("footer.php"); ?>
</body>
</html>