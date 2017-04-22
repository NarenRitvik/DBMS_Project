<!DOCTYPE html>
<html>
<body background="a9.jpg">
<?php
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
echo"<b style=\"font-size:18px\">Here is your result</b>";
echo"<br>";
 $sql1="select * from tregistration";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
	 echo "<table border= '2' style=\"width:100%\">
	 <br>
	 <thead>
		<tr>
		<th>Userid</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Gender</th>
		 </tr> <thead>";
	
    while($row = $result->fetch_assoc()) {
        
		echo"<tbody><tr>
		 <td align=\"center\">".$row['userid']."</td> 
		 <td align=\"center\">".$row['firstname']." </td>
		 <td align=\"center\">".$row['lastname']." </td>
		 <td align=\"center\">".$row['email']." </td>
		 <td align=\"center\">".$row['gender']." </td>
		 </tr></tbody>";
		 
		  }
		  echo"</table>";
}
          echo"

<form action='option1.html' method='post'>
<br>
<br>

<input type='submit'  value='BACK'>

 </form>
 ";
 $conn->close();		  
 ?>
</body>
</html>