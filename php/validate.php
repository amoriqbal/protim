<?php
require 'db.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$email = $_POST['uname'];
$password = $_POST['passwd'];
$stmt->execute();
if($stmt->get_result()->num_rows==1)
{
  header("Location: ../cultural_home.html");
}
else
{
  echo "Invalid username or password";
}
?>
