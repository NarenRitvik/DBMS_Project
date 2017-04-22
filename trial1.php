<!DOCTYPE html>
<html>
<body>
here is the table.

<table border = "2">
<tr>
<th>naren</th>
<th>sai</th>
</tr>

</table>

</body>

</html>
$sql1="select distinct 
 a.flightid as Flightid,
 f.going as Departure,
 f.reaching as Arrival,
 ab.company as Company,
 a.seats as Availability,
 a.flighttime as Time,
 f.duration as Duration,
 f.fare*$n*2 as Fare
 from tavail a,tflight f,tabout ab where
$number < a.seats and 
a.flightid  = f.flightid and
 f.flightid = ab.flightid and 
 f.going = '$source' and 
 f.reaching = '$destination' and 
 a.class='$class' 
 and a.flightdate = '$d'";