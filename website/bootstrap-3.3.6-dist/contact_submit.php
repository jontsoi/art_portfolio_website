<!DOCTYPE html>
<html>
<body>

<?php
$hellomessage = "<h1>Email sent</h1>";

$subject1 = $_POST["name"];
$subject2 = $_POST["email"];
$subject = "Message from $subject1 $subject2";
$message = $_POST["mymessage"]; 

mail("tsoi.jon@outlook.com", $subject, $message);
mail("tsoi.jon@outlook.com", 'WORK', 'HARDCODED THUGS 2');
echo $hellomessage;
echo $subject;
echo $message;
?>  
  
</body>
</html>