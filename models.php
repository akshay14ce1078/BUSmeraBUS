<!-- Modal1 -->
  <div class="modal fade" id="addplace" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Source to Destination</h4>
        </div>

        <div class="modal-body">
          <br>
          <form method="post" action="includes/addplace_process.php">
    <div class="form-group">
      <label for="src">Enter Source:</label>
      <input type="text" class="form-control" id="src" name="src">
    </div>
    <div class="form-group">
      <label for="des">Enter Destination:</label>
      <input type="text" class="form-control" id="des" name="des">
    </div>
	<button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>

        <div class="modal-footer">
    
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal2 -->
  <div class="modal fade" id="viewplace" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Route To (Source:Destination)</h4>
        </div>

        <div class="modal-body">
          <?php 
			include_once 'includes/db_connect.php';			
			$sql="select * from place";
			$result=$conn->query($sql);
			echo"<table class=\"table table-striped\">
				<thead>
					<tr>
					<th>Source</th>
					<th>Destination</th>
					<th>Add Route</th>
					</tr>
				</thead>";
			
			while($row=$result->fetch_assoc()){
				echo "<tbody>
						<tr>
						<td>".$row['src']."</td>
						<td>".$row['des']."</td>
						<td><form method=\"get\" action=\"add_route.php\">
    <input type=\"hidden\" name=\"place_id\" value=".$row['place_id'].">
	<input type=\"submit\" class=\"btn btn-default\"></form>
						</td>
						</tr>
					</tbody>";
			}
			echo"</table>";
			$conn->close();
		  ?>
          
		  
        </div>

        <div class="modal-footer">
    
        </div>
      </div>
      
    </div>
  </div>
   <!-- Modal3  -->
  <div class="modal fade" id="view_booking" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View All Bookings</h4>
        </div>

        <div class="modal-body">
          <br>
          <form method="post" action="view_cancelled.php">
    <div class="form-group">
      <label for="src">Starting Date:</label>
      <input type="date" class="form-control" id="start_date" name="start_date">
    </div>
    <div class="form-group">
      <label for="des">Ending Date :</label>
      <input type="date" class="form-control" id="end_date" name="end_date">
    </div>
	<button type="submit" class="btn btn-default">Check</button>
          </form>
        </div>

        <div class="modal-footer">
    
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal4  -->
  <div class="modal fade" id="view_feedback" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View All Feedback Between</h4>
        </div>

        <div class="modal-body">
          <br>
          <form method="post" action="view_feedback.php">
    <div class="form-group">
      <label for="src">Starting Date:</label>
      <input type="date" class="form-control" id="start_date" name="start_date">
    </div>
    <div class="form-group">
      <label for="des">Ending Date :</label>
      <input type="date" class="form-control" id="end_date" name="end_date">
    </div>
	<button type="submit" class="btn btn-default">Check</button>
          </form>
        </div>

        <div class="modal-footer">
    
        </div>
      </div>
      
    </div>
  </div>