<!DOCTYPE html>
<html>
<body background="a24.jpg" style=color:#660000>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dname= "airbase";
$_SESSION["going"] = $source = $_POST["source"];
$_SESSION["reaching"] = $destination =$_POST["destination"];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
$_SESSION["travelers"] = $number=$_POST["number"];
$_SESSION["class"] = $class=$_POST["class"];
$_SESSION["d"] = $d= "$year"."/"."$month"."/"."$date";
$_SESSION["d1"] = $d1= "$date"."/"."$month"."/"."$year";
$trip=$_POST["trip"];
$s="OneWay";
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
echo "<b style=\"font-size:20px\">Date: $d1</b>";
echo"<br>";
echo "<b style=\"font-size:20px\">Class: $class</b>";
echo"<br>";
echo "<b style=\"font-size:20px\">Passengers: $number </b>";
echo"<br>";
echo"<br>";
$n=(int)$number;
echo"<b style=\"font-size:18px\">Your search is from ".$source." to ".$destination.":</b>";
echo"<br>";
if(strcmp($trip,$s)==0)
{
 $sql1="select distinct 
 a.flightid as Flightid,
 f.going as Departure,
 f.reaching as Arrival,
 ab.company as Company,
 a.seats as Availability,
 a.flighttime as Time,
 f.duration as Duration,
 f.fare*$n as Fare
 from tavail a,tflight f,tabout ab where
$number <= a.seats and 
a.flightid  = f.flightid and
 f.flightid = ab.flightid and 
 f.going = '$source' and 
 f.reaching = '$destination' and 
 a.class='$class' 
 and a.flightdate = '$d'";
}
else
{
	header("Location:view1.php");
}	
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
	 echo "<table border= '2' style=\"width:100%\">
	 <br>
	 <thead>
		<tr>
		<th>Flightid</th>
		<th>Comany</th>
		<th>Availability</th>
		<th>Duration</th>
		<th>Time</th>
		<th>Fare</th>
		 </tr> <thead>";
	
    while($row = $result->fetch_assoc()) {
        
		echo"<tbody><tr>
		 <td align=\"center\">".$row['Flightid']."</td> 
		 <td align=\"center\">".$row['Company']." </td>
		 <td align=\"center\">".$row['Availability']." </td>
		 <td align=\"center\">".$row['Duration']."</td>
		 <td align=\"center\">".$row['Time']."</td>
		 <td align=\"center\">".$row['Fare']." </td>
		 </tr></tbody>";
		 
		  }
		  echo"</table>";
          echo"

<form action='process.php' method='post'>
<br>
<br>
<b>Enter the Flightid:</b>
<input type='text' name='flightid'>

<input type='submit'  value='BOOK'>

 </form>
 ";
 $conn->close();		  
		  }
	  
  else 
  {
	  echo "<b style=\"font-size:20px\"> Oops! no results for your search</b>" ;
  }
 
    




 ?>
</body>
</html>