<?php
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "imldb";

    /* create a connection to MySQL */
    $conn = new mysqli($servername, $username, $password, $dbname); 

    /* check connection */
    if ($conn->connect_errno)  {
        die("Connection failed: " . $conn->connect_error);
    }
?>