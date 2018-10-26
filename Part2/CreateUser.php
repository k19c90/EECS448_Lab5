<?php
$userid = $_POST['userid'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546");

if ($mysqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('$userid')";
if ($mysqli->query($query)){
  echo "Success! User ID ";
  echo $userid;
  echo " has been created.";
}
else {
  echo "Error: User ID already exists.";
}
$mysqli->close();

  ?>
