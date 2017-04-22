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
// Create database
$sql = "CREATE DATABASE $dname";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully :$dname <br>";
} else {
    echo "Error creating database $dname: " . mysqli_error($conn);
}
//using database
$sql = "USE $dname";
if (mysqli_query($conn, $sql)) {
    echo "Connected to database successfully<br>";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}
//creating tables .
// table tregistraton
$sql2 = "CREATE TABLE tregistration (
userid INT AUTO_INCREMENT, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50),
gender VARCHAR(10),
PRIMARY KEY(userid)
)";
if (mysqli_query($conn, $sql2)) {
    echo "Table tregistration created successfully<br>";
} else {
    echo "Error creating tregistration table: " . mysqli_error($conn);
}
// table tabout
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
//table tflight
$sql4 = "CREATE TABLE tflight (
flightid INT, 
going VARCHAR(30) NOT NULL,
reaching VARCHAR(30) NOT NULL,
duration TIME NOT NULL,
fare INT,
FOREIGN KEY(flightid) REFERENCES tabout(flightid)
 )";
if (mysqli_query($conn, $sql4)) {
    echo "Table tflight created successfully<br>";
} else {
    echo "Error creating tflight table: " . mysqli_error($conn);echo"<br>";
}
//table tavail
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

//table tadmin
$sql7 = "CREATE TABLE tadmin (
empid INT, 
password VARCHAR(30))";
if (mysqli_query($conn, $sql7)) {
    echo "Table tadmin created successfully<br>";
} else {
    echo "Error creating tadmin table: <br>" . mysqli_error($conn);
}
//table tfix
$sql8="CREATE TABLE tfix (bookingid INT AUTO_INCREMENT,userid INT,firstname VARCHAR(20),travelers INT,flightdate DATE NOT NULL,flightid INT,company VARCHAR(20),class VARCHAR(20),going VARCHAR(20),reaching VARCHAR(20),time TIME NOT NULL,duration TIME NOT NULL,fare INT,PRIMARY KEY(bookingid))";
if (mysqli_query($conn, $sql8)) {
    echo "Table tfix created successfully<br>";
} else {
    echo "Error creating tfix table: <br>" . mysqli_error($conn);
}
			     //database dropping
//$sql = "DROP DATABASE $dname";
//if (mysqli_query($conn, $sql)) {
//echo "Dropped database  successfully : $dname";
//} else {
//echo "Error in dropping database $dname" . mysqli_error($conn);
//}

mysqli_close($conn);
?>