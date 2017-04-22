<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dname= "airbase";
$_SESSION["flightid"] = $flightid = $_POST["flightid1"];
$n=(int)$_SESSION["travelers"];
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//using database
$sql = "USE $dname";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}
$sql4="select * from tabout where flightid = $flightid";
$result = $conn->query($sql4);
if ($result->num_rows > 0) {
 $sql1="select ab.flightid as Flightid,ab.company as Company,a.flighttime as Time,f.duration as Duration,f.fare * $n as Fare 
 from tavail a,tflight f,tabout ab
 where ab.flightid = $flightid and
 ab.flightid = a.flightid and
 ab.flightid = f.flightid";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
		 $_SESSION['flightid'] = $row['Flightid']; 
		 $_SESSION['company'] = $row['Company'];
		 $_SESSION['time'] = $row['Time'];
		 $_SESSION['duration'] = $row['Duration'];
		 $_SESSION['fare'] = $row['Fare'];
		
		  }
		
}
		$u = 	(int)$_SESSION['userid'];
		$na = 	$_SESSION['firstname'];
		$p = 	(int)$_SESSION['travelers'];
		$d= 	$_SESSION['d'];
		$f = 	$_SESSION['flightid'];
		$c = 	$_SESSION['company'];
		$e = 	$_SESSION['class'];
		$g = 	$_SESSION['going'];
		$r = 	$_SESSION['reaching'];
		$t= 	$_SESSION['time'];
		$tt = 	$_SESSION['duration'];
		$ff = 	(int)$_SESSION['fare'];
		
	$sql2 = "insert into tfix(userid,firstname,travelers,flightdate,flightid,company,class,going,reaching,time,duration,fare) values ($u,'$na',$p,'$d','$f','$c','$e','$g','$r','$t','$tt',$ff)";	
	$result = $conn->query($sql2);
$sql3 ="update tavail set seats = seats - $p where flightid = $f";
    $result = $conn->query($sql3);
  header("Location:slip.php");
}
else{
	header("Location:other.php");
}
$_SESSION["flightid"] = $flightid = $_POST["flightid2"];
$sql4="select * from tabout where flightid = $flightid";
$result = $conn->query($sql4);
if ($result->num_rows > 0) {
 $sql1="select ab.flightid as Flightid,ab.company as Company,a.flighttime as Time,f.duration as Duration,f.fare * $n as Fare 
 from tavail a,tflight f,tabout ab
 where ab.flightid = $flightid and
 ab.flightid = a.flightid and
 ab.flightid = f.flightid";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
		 $_SESSION['flightid'] = $row['Flightid']; 
		 $_SESSION['company'] = $row['Company'];
		 $_SESSION['time'] = $row['Time'];
		 $_SESSION['duration'] = $row['Duration'];
		 $_SESSION['fare'] = $row['Fare'];
		
		  }
		
}
		$u = 	(int)$_SESSION['userid'];
		$na = 	$_SESSION['firstname'];
		$p = 	(int)$_SESSION['travelers'];
		$d= 	$_SESSION['d'];
		$f = 	$_SESSION['flightid'];
		$c = 	$_SESSION['company'];
		$e = 	$_SESSION['class'];
		$g = 	$_SESSION['reaching'];
		$r = 	$_SESSION['going'];
		$t= 	$_SESSION['time'];
		$tt = 	$_SESSION['duration'];
		$ff = 	(int)$_SESSION['fare'];
		
	$sql2 = "insert into tfix(userid,firstname,travelers,flightdate,flightid,company,class,going,reaching,time,duration,fare) values ($u,'$na',$p,'$d','$f','$c','$e','$g','$r','$t','$tt',$ff)";	
	$result = $conn->query($sql2);
$sql3 ="update tavail set seats = seats - $p where flightid = $f";
    $result = $conn->query($sql3);
  header("Location:slip.php");
}
else{
	header("Location:other.php");
}
$conn->close();
  ?>
</body>
</html>