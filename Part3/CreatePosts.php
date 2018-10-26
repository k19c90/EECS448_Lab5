<?php
  $userid = $_POST['userid'];
  $text = $_POST['post'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546");
  
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $userQuery = "SELECT user_id FROM Users where user_id='$userid'";
  $userCheckQuery = $mysqli->query($userQuery);

  if($userCheckQuery->fetch_assoc())
  {
    $insertPostQuery = "INSERT INTO Posts (author_id, content) VALUES ('" . $username . "','" . $text . "')";
    $mysqli->query($insertPostQuery);
    echo "A post was created by " . $username . "!";
  }
  else
  {
    echo "Error: the username " . $username . " does not exist.";
  }

  $userSearchResult->free();
  $mysqli->close();
?>