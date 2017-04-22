<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname= "r";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql2 = "CREATE TABLE tregistration (
userid INT AUTO_INCREMENT, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50),
PRIMARY KEY(userid)
)";
if (mysqli_query($conn, $sql2)) {
    echo "<br>Table tregistration created successfully<br>";
} else {
    echo "Error creating tregistration table: " . mysqli_error($conn);
}
$sql3 = "CREATE TABLE tabout (
flightid INT  PRIMARY KEY, 
company VARCHAR(30) NOT NULL,
capacity INT(6)
)";
if (mysqli_query($conn, $sql3)) {
    echo "Table tabout created successfully<br>";
} else {
    echo "Error creating  tabout table: <br>" . mysqli_error($conn);
}
$sql4 = "CREATE TABLE tflight (
flightid INT, 
going VARCHAR(30) NOT NULL,
reaching VARCHAR(30) NOT NULL,
duration VARCHAR(10),
FOREIGN KEY(flightid) REFERENCES tabout(flightid)
 )";
if (mysqli_query($conn, $sql4)) {
    echo "Table tflight created successfully<br>";
} else {
    echo "Error creating tflight table: " . mysqli_error($conn);echo"<br>";
}
$sql5 = "CREATE TABLE tavail (
flightid INT, 
flightdate DATE NOT NULL,
flighttime TIME NOT NULL,
fare INT(10) NOT NULL,
class VARCHAR(10),
seats INT(6),
FOREIGN KEY(flightid) REFERENCES tabout(flightid)
)";
if (mysqli_query($conn, $sql5)) {
    echo "Table tavail created successfully<br>";
} else {
    echo "Error creating tavail table: <br>" . mysqli_error($conn);echo"<br>";
}
$sql6 = "CREATE TABLE tfix (
userid INT, 
flightdate DATE NOT NULL,
total INT(10) NOT NULL,
class VARCHAR(10),
seats INT(6),
FOREIGN KEY(userid) REFERENCES tregistration(userid)
)";
if (mysqli_query($conn, $sql6)) {
    echo "Table tfix created successfully";
} else {
    echo "Error creating tfix table: <br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>