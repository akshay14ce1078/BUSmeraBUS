<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
</style>
</head>
<body>

<?php require("navigation.php");echo '<br>'; ?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-2" style="background-color:white;">
	
  </div>
  <div class="col-sm-8"  style="background-color:#ff99ff;">
	
	
  <br>
  <form action="includes/login_process.php" method="post" >
	admin id:akshaydeoghare8@gmail.com
	password:12345<br>
	user id:prajyot1708@gmail.com
	password:prajyot<br>
	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
      <button type="submit" class="btn btn-primary btn-md" style="background-color:#800080;">Submit</button>
  </form>
 
	<a href="register_user.php">New User</a> <strong>| </strong><a href="#">Forget Password<br></a>
	<br>

  </div>
  <div class="col-sm-2" style="background-color:white;">
	
  </div>
 </div>
</div>
<?php echo '<br><br><br><br><br><br><br><br><br>'; require("footer.php"); ?>
</body>
</html>