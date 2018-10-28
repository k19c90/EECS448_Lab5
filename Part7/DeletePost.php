<?php
  $delete = $_POST['delete'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546");

  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  if(isset($delete))
  {
    foreach($delete as $post_id)
    {
      $query = "DELETE FROM Posts where post_id = " . $post_id;
      $mysqli->query($query);
      echo "Post Id " . $post_id . " has been deleted.<br>";
    }
  }

  $result->free();
  $mysqli->close();
?>