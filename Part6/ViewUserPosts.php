<?php
  echo "<table
  border=\"1\">";
  echo "<tr> <th>post_id</th> <th>author_id</th> <th>content</th> </tr>";
  $mysqli = new mysqli("mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546");

  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $user_id = $_POST['userid'];
  $query = "SELECT * FROM Posts WHERE author_id=('$user_id')";
  
  if ($result = $mysqli->query($query))
  {
    while ($row = $result->fetch_assoc())
    {
      printf("<tr> <td>%s</td> <td>%s</td> <td>%s</td> </tr>", $row["post_id"], $row["author_id"], $row["content"]);
    }
  }
  echo "</table>";

  $result->free();
  $mysqli->close();
?>