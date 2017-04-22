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

$url =$_GET["CSV"];
$myfile = fopen($url, "r") or die("Unable to open file!");
while(($fileop = fgetcsv($myfile , ",")) != false )
{
  $Employee_id = $fileop[0];
  $Employee_name = $fileop[1];
  $Designation_id = $fileop[2];
  $Department = $fileop[3];
  $Email_id =  $fileop[4];
  $Address  = $fileop[5];
  $City = $fileop[6];
  $Phone_no  = $fileop[7];
  $Posting_date  = $fileop[8];
  $sql= " Insert into basic_inforamtion values ('$Employee_id','$Employee_name','$Designation_id','$Department','$Email_id','$Address','$City','$Phone_no','$Posting_date')";
  if(mysqli_query ($conn, $sql))
{
echo "<h1> Successful in Updating database </h1>";
}
else
{
	echo "Error in  creating " . mysqli_error($conn);	
}
  }
fclose($myfile);
	 echo "<form action='http://localhost/payroll/Admin/ad1.html'>
        <input type='submit' value='Click here to return to operator page'>
     </form> "	;	



?>