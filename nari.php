<!DOCTYPE html>
<html>
<style>
input[type=text],[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

	
</style>


<body>
<h1>
Login
</h1>
<br>
<br>
<form action="/project/l1.php" method = "POST">
  user_id:
  <input type="text" name="usid" placeholder="Enter Userid" required>
  <br>
  password:
  <input type="password" name="psw" placeholder="Enter Password" required>
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
