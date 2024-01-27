<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!empty($name) || !empty($email) || !empty($subject) || !empty($message)) 
{
 $connection = mysql_connect ('localhost','root','abc@1234');
mysql_select_db('sys');
 }
else {
     $query = 
"INSERT INTO sys.CotactUs
(name,email,subject,message)

values

('$name','$email','$subject','$message')";
     

$result = mysql_query($query);
Echo "Database Saved"; 
mysql_close($connection);
} 
    
 


?>