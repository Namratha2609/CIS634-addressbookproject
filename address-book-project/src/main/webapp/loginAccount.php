<?php
session_start(); 
include 'connection.php';
$username = $_POST['Uname'];
$password = $_POST['Pass'];
$sql = "SELECT * FROM users where username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
        $_SESSION['user']=$username;
        header("Location: contacts.php");
}
}
else{
    echo "Invalid username or password";
 }
?>