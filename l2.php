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
echo "Backend database name :::$dname<br>";
echo "<h2>S.NAREN</h2><br>Under Tutor:<h2> Barnana Baruah</h2><br>";

//using database
$sql = "USE $dname";
if (mysqli_query($conn, $sql)) {
    echo "Connected to database successfully<br>";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}
$User_Id = ("$_POST[usid]");
$Password =("$_POST[psw]");
 $sql1=" SELECT empid,password FROM tadmin  Where empid = '$User_Id' and password = '$Password'";
  
$result = mysqli_query($conn, $sql1);
$num_rows = mysqli_num_rows($result);
  
  if( $num_rows > 0)
  {
 
        header("Location:view1.html");
     
      } 
  
  else 
  {
	  echo " Error in Credentials" ;
  }
 
    

?>