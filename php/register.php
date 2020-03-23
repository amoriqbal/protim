<?php
try{
require 'db.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);
$email = $_POST['uname'];
$password = $_POST['passwd'];
$stmt->execute() or die ("could not execute ");
$stmt->close();
$conn->close();
echo 1;
}
catch(Exception $e)
{
	echo 'error'.$e;
}
?>
