<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<style>
.row.content{height:auto;}
.sidespace {height: auto;}

/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
</style>

</head>
<body>
<?php require("user_navigation.php");  echo '<br>'; ?>
<div class="container-fluid">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
  <div class="col-sm-10" style="background-color:#ff99ff;">
  
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
	<div class="form-group">
		<label for="usr">Enter NickName:</label>
		<input type="text" class="form-control" id="usr" name="nickname">
	</div>
	
	 <div class="form-group">
		<label for="comment">Comment:</label>
		<input type="textarea" class="form-control" rows="2" id="comment" name="comment"></input>
	</div>
	
     <input type="submit" value="submit" class="btn btn-primary btn-md" style="background-color:#800080;"></input>
	</form>
	
  </div>
  <div class="col-sm-1 sidespace" style="background-color:white;">
	
  </div>
 </div>
</div>


<?php  echo '<br><br><br><br><br>';require("footer.php"); ?>
</body>
</html>

<?php
 
include_once 'includes/db_connect.php'; 
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$user=$_POST["nickname"];
	$comment=$_POST["comment"];
	$timezone = date("m/d/y");
	
	$result=$conn->query("insert into feedback(user_name,feedback,fdate)values('".$user."','".$comment."','".$timezone."')");
	if($result ==true){
		header('Location:user_homepage.php');
	}
	else{
		echo " <div class=\"alert alert-warning\">
		 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Comment Not Submited!</strong>some error occured please provide again
  </div>";
	}
}

?>
