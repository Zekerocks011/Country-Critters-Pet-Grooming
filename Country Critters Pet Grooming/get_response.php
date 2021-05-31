<?php 
require_once("C:/php/ext/config.php");
$firstName = $conn->real_escape_string($_POST['firstname']);
$lastName = $conn->real_escape_string($_POST['lastname']);
$phone = $conn->real_escape_string($_POST['phone']);
$email = $conn->real_escape_string($_POST['email']);
$sql="INSERT INTO contact_form_info (firstname, lastname, phone, email) VALUES ('".$firstName."','".$lastName."', '".$phone."', '".$email."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
?>