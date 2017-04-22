<!DOCTYPE html>
<html>
<body background="a2.jpg">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dname= "airbase";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//using database
$sql = "USE $dname";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}
$i = (int)$_SESSION['userid'];
$sql1 = "select * from tfix where userid = $i";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
	echo"<b style=\"font-size:18px\">STATUS:BOOKED </b>";
echo"<br>";
    // output data of each row
	 echo "<table border= '3' style=\"width:100%\">
	 <br>
	 <thead>
		<tr>
		<th>BookingId</th>
		<th>UserId</th>
		<th>Name</th>
		<th>Travelers</th>
		<th>Date</th>
		<th>FlightId</th>
		<th>Company</th>
		<th>Class</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Time</th>
		<th>Duration</th>
		<th>Fare</th>		
		 </tr> <thead>";
	
    while($row = $result->fetch_assoc()) {
           
		echo"<tbody><tr>
		  <td align=\"center\">".$row['bookingid']."</td> 
		 <td align=\"center\">".$row['userid']."</td> 
		<td align=\"center\">".$row['firstname']."</td>
		<td align=\"center\">".$row['travelers']."</td>
		<td align=\"center\">".$row['flightdate']."</td>
		<td align=\"center\">".$row['flightid']."</td>
		<td align=\"center\">".$row['company']."</td>
		<td align=\"center\">".$row['class']."</td>
		<td align=\"center\">".$row['going']."</td>
		<td align=\"center\">".$row['reaching']."</td>
		<td align=\"center\">".$row['time']."</td>
		<td align=\"center\">".$row['duration']."</td>
		<td align=\"center\">".$row['fare']."</td>
		 </tr></tbody>";
		 
		  }
		  echo"</table>";
						
						
						echo"

						<form action='view.php'>
						<br>
						<br>

						<input type='submit'  value='BACK'>

						 </form>
						 ";
						  echo"

						<form action='cancel.php' method='post'>
						<br>
						<br>
						<b>Enter the BookingId:</b>
						<input type='text' name='bookingid'>

						<input type='submit'  value='CANCEL BOOKING'>

						 </form>
						 ";
						echo"

						<form action='last.php'>
						<br>
						<br>

						<input type='submit'  value='LOGOUT'>

						 </form>
						 ";
		  }
else
{
							echo"<b style=\"font-size:18px\">STATUS..NOT BOOKED.. </b>";

						echo"

						<form action='view.php'>
						<br>
						<br>

						<input type='submit'  value='BACK'>

						 </form>
						 ";
						echo"

						<form action='last.php'>
						<br>
						<br>

						<input type='submit'  value='LOGOUT'>

						 </form>
						 ";
}
 $conn->close();	

		  ?>
</body>
</html>