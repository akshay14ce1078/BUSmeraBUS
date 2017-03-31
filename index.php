<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		<link rel="stylesheet" href="index.css" type="text/css"/>
  
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

/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

  
</style>
		<title>BUSmeraBUS</title>
		<link rel="icon"  href="pic/title.jpg">
</head>
<body>
<div class="container-fluid">
<center><img src="logo.jpg"/ ></center>
</div>
<?php require("navigation.php");?>
<div class="container-fluid" style="margin-top:20px;">
 <div class="row ">
  <div class="col-sm-1 sidespace" style="background-color:pink;">
	
  </div>
  <div class="col-sm-10" >
	
	<div class="row content">
     <div class="col-sm-4" >
		<?php require("search_bus.php"); ?>
	 </div>
     <div class="col-sm-8" style="background-color:#800080;">
		<?php require("slides.php"); ?>
	 </div>
	</div>
  </div>
  <div class="col-sm-1 sidespace" style="background-color:grey;">
	
  </div>
 </div>
</div>
<?php echo'<br>'; require("footer.php"); ?>
</body>
</html>