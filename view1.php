<?php
session_start();
?>
<html>
<head>
</head>
<style>

</style>
<body background="a4.jpg">
<br>
<form action="/project/offers1.php" method = "POST">
<?php 
$a=$_SESSION['firstname'];
echo "<b style=\"font-size:25px\">Hello!! $a </b>";
?>
<br>
<br><?php
     
	 $d1 = $_SESSION['d1'];
	echo "<b style=\"font-size:20px\">Traveling from: $d1</b>";
	 echo"<br>";
	 echo "<b style=\"font-size:20px\">Returning on: </b>";;
	 ?>
<table border = "5">
<tr>
 <th>Date</th>
 <th>Month</th>
 <th>Year</th>
 <th></th>
 </tr>
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
  <td><select name = "month" > 
   <option value="01"selected>01</option>
    <option value="02">02</option>
    <option value="03">03</option>
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
  <td align="center">
 <input type="submit" value="OK"></form> 
 </td>

</body>
</html>
