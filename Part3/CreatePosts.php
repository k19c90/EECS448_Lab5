<?php
  $userid = $_POST['userid'];
  $text = $_POST['post'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546");
  
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $userQuery = "SELECT user_id FROM Users where user_id=('$userid')";
  $userCheck = $mysqli->query($userQuery);

  if($userCheck->fetch_assoc())
  {
    $addPost = "INSERT INTO Posts (author_id, content) VALUES ('$userid', '$text')";
    $mysqli->query($addPost);
    echo "A post was successfully added by " . $userid . ".";
  }
  else
  {
    echo "Error: User ID " . $userid . " does not exist.";
  }

  $userSearchResult->free();
  $mysqli->close();
?>