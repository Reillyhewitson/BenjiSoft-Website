<?php
$con = mysql_connect("dbaddress","username","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("customform", $con);
$sql="INSERT INTO formdata (Fname, Lname, Email, Message)
VALUES ('$_POST[Fname]','$_POST[Lname]','$_POST[Email]','$_POST[Message]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Your Information Was Successfully Posted";
mysql_close($con);
$to = "benji@benjicraft.info";
$subject = "Question from website";
$email = $_POST['Email'] ;
$message = $_POST['Comp'] ;
$headers = "From: $Email";
$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{print "Your message was sent successfully"; }
else
{print "We encountered an error sending your message"; }
?>
