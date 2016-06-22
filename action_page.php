<?php

$con = mysql_connect('dbaddress', 'username', 'password');
if (!$con) {
    die('Could not connect: '.mysql_error());
}
mysql_select_db('customform', $con);
$sql = "INSERT INTO formdata (Fname, Lname, Email, Message)
VALUES ('$_POST[Fname]','$_POST[Lname]','$_POST[Email]','$_POST[Message]')";
if (!mysql_query($sql, $con)) {
    die('Error: '.mysql_error());
}
echo 'Your Information Was Successfully Posted';
mysql_close($con);
