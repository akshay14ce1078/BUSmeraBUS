
<form method="post" action="search_bus_process.php">
    <div class="form-group">
      <label for="source">Source:</label>
      <input type="text" class="form-control" id="source" name="source">
    </div>
	<div class="form-group">
      <label for="dest">Destination:</label>
      <input type="text" class="form-control" id="dest" name="dest">
    </div>
    <div class="form-group">
      <label for="sel1">Bus Type:</label>
      <select class="form-control" id="sel1" name="bus_type">
        <option value="ac">A.C</option>
        <option value="nonac">Non A.C</option>
      </select>
    </div>
	<div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Travel Date:</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
      </div>
	
	 
  <button type="submit" class="btn btn-primary btn-md" style="background-color:#800080;">Search</button>
</form> 