<?php
session_start();
?>
<html>
<head>
</head>
<style>

</style>
<body background="a21.jpg"style=color:#330000>
<br>
<form action="/project/offers.php" method = "POST">
<?php 
$a=$_SESSION['firstname'];
echo "<b style=\"font-size:25px\">Hi!! $a </b>";
?>

<br>
<br>
<table border = "10" style ="width:100%">
<tr>
 <th>Source</th>
 <th>Destination</th>
 <th>Date</th>
 <th>Month</th>
 <th>Year</th>
 <th>Trip</th>
 <th>Class</th>
 <th>Number</th>
 <th></th>
 </tr>
 <td align="center"> <select name="source">
    <option value="Hyderabad">Hyderabad</option>
    <option value="Banglore">Banglore</option>
    <option value="Kolkata" >Kolkata</option>
    <option value="Guwahati "selected>Guwahati</option>
  </select></td>
  <td align="center"> <select name="destination">
    <option value="Hyderabad"selected> Hyderabad</option>
    <option value="Banglore">Banglore</option>
    <option value="Kolkata" >Kolkata</option>
    <option value="Guwahati">Guwahati</option>
  </select></td>
  <td align="center"><select name = "date" > 
   <option value="01"selected>01</option>
    <option value="02">02</option>
    <option value="03" >03</option>
    <option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
    <option value="21">21</option>
	<option value="22">22</option>
    <option value="23" >23</option>
    <option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
  </select></td>
  </select></td>
  <td align="center"><select name = "month" > 
   <option value="01"selected>01</option>
    <option value="02">02</option>
    <option value="03" >03</option>
    <option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
    <option value="12">12</option>
	</select></td>
  </select></td>
    <td align="center"><select name = "year" > 
   <option value="2017">2017</option>
    <option value="2018">2018</option>
    </select></td>
  </select></td>
  <td align="center"><select name = "trip" > 
   <option value="OneWay">OneWay</option>
    <option value="RoundTrip">RoundTrip</option>
  </select></td>
  <td align="center"><select name = "class" > 
   <option value="Economy">Economy</option>
    <option value="Business">Business</option>
  </select></td>
  <td align="center"><select name = "number"> 
   <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
  </select></td>
  <td align="center">
 <input type="submit" value="BOOK"></form> 
 </td>

<form action='slip.php' method='post'>
<br>
<br>
<b>View Profile:</b>
<input type='submit'  value='SUBMIT'>
<br>
<br>
 </form>
</body>
</html>