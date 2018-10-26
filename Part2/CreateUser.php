<?php

$mysqli = new mysqli("https://mysql.eecs.ku.edu", "k310c546", "Choo9eiK", "k310c546")
    
/* checking connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$userid = $_POST("userid")
$query = "INSERT INTO Users (user_id) VALUES (userid)"
    
    
    
    
    

/* close connection */
$mysqli->close();
    
    
 ?>