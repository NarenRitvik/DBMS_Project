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
    echo "<br>";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}
$User_Id = $_POST['usid'];
$_SESSION["userid"]=$_POST['usid'];

$Password =$_POST['psw'];
 $sql1=" SELECT userid,firstname,password FROM tregistration  Where userid = '$User_Id' and password = '$Password'";
  
$result = mysqli_query($conn, $sql1);
$num_rows = mysqli_num_rows($result);
  
  if( $num_rows > 0)
  {
	  while($row = $result->fetch_assoc()) {
	  
          $_SESSION["firstname"]=$row["firstname"];
       } 
	   header("Location:view.php");
  }
  else 
  {
	  header("Location:other1.php");
  }
  $conn->close();
?>