<html>
<head>
  <title>
    Thank you!
  </title>
  <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
<?php
// Connects to the database
$con = mysql_connect('db01.c7nb2taykzsz.eu-west-1.rds.amazonaws.com:3306', 'github', 'bob123');
if (!$con) {
    die('Could not connect: '.mysql_error());
}
// Connects to the table called 'example'
mysql_select_db('example', $con);
// Gets values and inserts into table in format: table (value1, value2)
$sql = "INSERT INTO formdata (Fname, Lname, Email, Message)
VALUES ('$_POST[Fname]','$_POST[Lname]','$_POST[Email]','$_POST[Message]')";
if (!mysql_query($sql, $con)) {
    die('Error: '.mysql_error());
}
echo 'Your Information Was Successfully Posted';
mysql_close($con);
?>
<form action="/index.html">
<button class="button">Return</button>
</form>
