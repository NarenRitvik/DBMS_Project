<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="use airbase";
if(mysqli_query($conn, $sql))
{
}
else
{
	echo "Error using database " . mysqli_error($conn);
	
}

$url =$_POST["CSV"];
$myfile = fopen($url, "r") or die("Unable to open file!");
while(($fileop = fgetcsv($myfile , ",")) != false )
{
  $flightid = $fileop[0];
  $flighttime = $fileop[1];
  $flightdate = $fileop[2];
  $fare = $fileop[3];
  $class = $fileop[4];
  
  $seats = $fileop[5];
  $sql= " Insert into tavail values ($flightid,'$flighttime','$flightdate','$fare','$class',$seats)";
  $R = 0;
  if(mysqli_query($conn, $sql))
{
	
$R = $R +1 ;


}
else
{
	echo "Error in  creating " . mysqli_error($conn);	
}
  }
fclose($myfile);
	 echo "<form action='http://localhost/project/view1.html'>
        <input type='submit' value='Click here'>
     </form> "	;	

echo "sucessfully updated ".$R."rows"; 

?>