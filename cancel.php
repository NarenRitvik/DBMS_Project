<!DOCTYPE html>
<html>
<body background="a11.jpg">
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
$j = (int)$_POST['bookingid'];
$sql1 = "Select * from tfix where bookingid = '$j' and userid = '$i'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
	while($row1 = $result1->fetch_assoc()) {
	   $w = $row1["flightid"];
	   $q = $row1["travelers"];
	 
	
	 }
	 
	 $o =$w;
	 $e =$q;

//$sql1 = "delete from tfix where userid ='".$i."' and flightid = '".$j."' and going = '".$g."' and reaching = '".$r."'";
$sql3 = "delete from tfix where userid ='".$i."' and bookingid = '".$j."'";
$result = $conn->query($sql3);

	echo"<b style=\"font-size:18px\">Cancelled Your Booking </b>";
	$sql3 = "update tavail set seats = seats + '$e' where flightid = '$o'";
		$result = $conn->query($sql3);
}

else{
	echo "Enter booking id correctly ";
	
}
		//$sql2 = select * from tfix where userid = $i
	//$result1 = $conn->query($sql2);
	//if ($result1->num_rows > 0) {
		//                echo "is not possible";
						echo"
						<form action='slip.php'>
						<br>
						<br>
						<input type='submit'  value='BACK'>
						 </form>";
						 //}
			//		else{
				//	echo " is done";
					//echo"
						//<form action='slip.php'>
						//<br>
						//<br>
						//<input type='submit'  value='BACK'>
						 //</form>
						 //";
					//}
					//$p =(int)$_SESSION['travelers'];
		
		
$conn->close();					
?>
</body>
</html>