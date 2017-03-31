
			$result_price=$conn->query("select price_per_seat from bus_route where bus_id=".$bus_id);
			$row_price=$result_price->fetch_assoc();
			$total_price=($row_price['price_per_seat'])*($no_of_seat);
			
			echo "<table class=\"table table-striped\">
					<thead><tr colspan=2><td><center><h3>BUS MERA BUS E-TICKET</h3></center></td><tr></thead>
					<tbody>
						<tr><td>Registration No:</td><td>".$row['reg_id']."</td></tr>
						<tr><td>Bus Route No:</td><td>".$bus_id."</td></tr>
						<tr><td>Bus name:</td><td>".$bus_name."</td></tr>
						<tr><td>First Name:</td><td>".$row['f_name']."</td></tr>
						<tr><td>Last Name:</td><td>".$row['l_name']."</td></tr>
						<tr><td>Email Id</td><td>".$row['email_id']."</td></tr>
						<tr><td>Address:</td><td>".$row['address']."</td></tr>
						<tr><td>City:</td><td>".$row['city']."</td></tr>
						<tr><td>Pin:</td><td>".$row['pin']."</td></tr>
						<tr><td>Phone No:</td><td>".$row['ph_no']."</td></tr>
						<tr><td>Booked Seats:</td><td>".$no_of_seat."</td></tr>
						<tr><td>Travelling Date:</td><td>".$bdate."</td></tr>
						<tr><td>Price:</td><td>".$total_price."</td></tr></tbody></table>";
			echo "<br><center><h4><B>Ticket booked.<br>Click here to go on <a href=\"user_homepage.php\">home page</a></h4></b></center>";