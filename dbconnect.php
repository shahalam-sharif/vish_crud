<?php 
    define("HOSTNAME" , "localhost");
    define("USERNAME" , "root");
    define("PASSWORD" , "");
    define("DBNAME" , "vish_crud");

    $conn = mysqli_connect(HOSTNAME , USERNAME , PASSWORD , DBNAME) or die("Database doesn't connected");

    //if($conn) echo "ok";
?>