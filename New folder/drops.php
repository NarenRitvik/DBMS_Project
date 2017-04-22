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
$sql = "DROP TABLE tregistration";
if (mysqli_query($conn, $sql)) {
    echo "Table dropped tregistration successfully<br>";
} else {
    echo "Error in dropping tregistration table: <br>" . mysqli_error($conn);
}
$sql = "DROP TABLE tabout";
if (mysqli_query($conn, $sql)) {
    echo "Table dropped tabout successfully<br>";
} else {
    echo "Error in dropping tabout table: <br>" . mysqli_error($conn);
}
$sql = "DROP TABLE tflight";
if (mysqli_query($conn, $sql)) {
    echo "Table dropped tflight successfully<br>";
} else {
    echo "Error in dropping tflight table: <br>" . mysqli_error($conn);
}
$sql = "DROP TABLE tavail";
if (mysqli_query($conn, $sql)) {
    echo "Table dropped tavail successfully<br>";
} else {
    echo "Error in dropping tavail table: <br>" . mysqli_error($conn);
}
$sql = "DROP TABLE tfix";
if (mysqli_query($conn, $sql)) {
    echo "Table tfix dropped successfully<br>";
} else {
    echo "Error in dropping table tfix: <br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>