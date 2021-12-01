<?php
include('connection.php');
$phone=$_REQUEST['phone'];
$sql="delete from contacts where phone='$phone'";
$result = $conn->query($sql);
header("Location: contacts.php");
?>