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

// using database
$sql = "airbase";
if (mysqli_query($conn, $sql)) {
    echo "Database  USING-----------------";
} else {
    echo "Error using database: " . mysqli_error($conn);
}
//set vars
$user =$_POST['unid'];
$pass = ($_POST['psw']);

if ($user&&$pass) 
{

$query = mysqli_query("SELECT * FROM tregistration WHERE userid=$user");

$numrows = mysql_num_rows($query);


if ($numrows!=0)
{
//while loop
  while ($row = mysql_fetch_assoc($query))
  {
    $dbusername = $row['username'];
    $dbpassword = $row['password'];
  }
  else
      die("incorrect username/password!");
}
else
  echo "user does not exist!";
} 
else
    die("please enter a username and password!");

mysqli_query($conn, $sql3);
?>
int a=(int)unid,b=
$sql3="SELECT userid,password from tregistration r WHERE r.userid = a AND r.password=(int)psw";




