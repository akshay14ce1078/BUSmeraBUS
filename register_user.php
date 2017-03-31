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
<?php require("navigation.php"); ?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
  <div class="col-sm-10" style="background-color:#ff99ff;">
	
  <br>
  <form action="includes/register_user_process.php" method="post" >
    <div class="form-group">
      <label for="fname">FirstName:</label>
      <input type="text" class="form-control" id="fname" name="fname" required>
    </div>
    <div class="form-group">
      <label for="lname">LastName:</label>
      <input type="text" class="form-control" id="lname"  name="lname">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
	<div class="form-group">
      <label for="address">Address:</label>
      <input type="textarea" class="form-control" id="address" name="address" required>
    </div>
	<div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control" id="city" name="city" required>
    </div>
	<div class="form-group">
      <label for="pin">Pin:</label>
      <input type="number" maxlength="6" class="form-control" id="pin" name="pin" required>
    </div>
		<div class="form-group">
      <label for="phoneno">PhoneNo.:</label>
      <input type="number" maxlength="10" class="form-control" id="phoneno" name="phoneno" required>
    </div>
	<div class="form-group">
      <label for="pwd"> EnterPassword:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
	<div class="form-group">
      <label for="pwd">RetypePassword:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Retype password" name="password" required>
    </div>
      <button type="submit" class="btn btn-primary btn-md" style="background-color:#800080;">Submit</button>
	&nbsp &nbsp
    <button type="reset" class="btn btn-primary btn-md" style="background-color:#800080;">Reset</button>

  </form>
  
  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>


<?php require("footer.php"); ?>
</body>
</html>