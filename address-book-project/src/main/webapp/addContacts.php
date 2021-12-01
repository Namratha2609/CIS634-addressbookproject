<?php
include 'connection.php';
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql="INSERT INTO contacts (name,address,email,phone) VALUES ('$name','$address','$email','$phone')";
if ($conn->query($sql) === TRUE) {
    header("Location: contacts.php");
} else {
  echo "An error has been occured";
}
?>
