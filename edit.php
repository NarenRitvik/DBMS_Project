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
    echo "Connected to database successfully<br>";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql8)) {
    echo "Table tfix created successfully<br>";
} else {
    echo "Error creating tfix table: <br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>