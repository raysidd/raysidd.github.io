<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
   $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");
    // Creates connection
//$conn = mysqli_connect("localhost","root","","details")

    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
    if(!$conn){
      die("not connected".mysqli_connect_errors());
    }

 ?>
