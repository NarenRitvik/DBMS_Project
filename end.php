<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "airbase";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Dropping database
$sql = "DROP DATABASE $dname";
if (mysqli_query($conn, $sql)) {
    echo "Database deleted successfully";
} else {
    echo "Error DELETING database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>