<?php

  echo "<table
  border=\"1\">";
  echo "<tr><th>user_id</th></tr>";

  $mysqli = new mysqli("mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546");

  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT user_id FROM Users";

  if ($returned = $mysqli->query($query))
  {
    while ($row = $returned->fetch_assoc())
    {
        printf("<tr><td>%s</td></tr>", $row["user_id"]);
    }
  }
  echo "</table>";

  $returned->free();
  $mysqli->close();
?>