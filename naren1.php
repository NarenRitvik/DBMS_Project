<!DOCTYPE html>
<html>
<style>
body {
        background-image: url("a7.jpg");
} 
	
</style>
<body style=color:#ff3300 align = "center">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airbase";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["mail"];
$passwd = $_POST["passwd"];
$gender = $_POST["gender"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql2 = "select * from tregistration where email = '$mail'";
$result2=$conn->query($sql2);
if ($result2->num_rows > 0) {
header('Location:already.html');

}
else
{
	$sql = "INSERT INTO tregistration(firstname,lastname,email,password,gender) values('$fname','$lname','$mail','$passwd','$gender')";
if ($conn->multi_query($sql) === TRUE) {
	echo"YOU REGISTERED SUCESSFULLY....";
    
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql1="select R.userid from tregistration R where R.firstname='$fname' and R.email='$mail' and R.password ='$passwd'";
$result1=$conn->query($sql1);

if ($result1->num_rows > 0) {
	while($row=$result1->fetch_assoc()){
	
	echo"Your   UserId is '$row[userid]'";
	
    }
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
}
$conn->close()
?>
<br>
<a href="welcome.html"><h2 >ok</h2></a>
</body>
</html>
