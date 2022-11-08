<?php
    $server = "127.0.0.1";
    $database = "secprog";
    $uName = "root";
    $pasword = "";

    $con = new mysqli($server,$uName,$pasword,$database);

    if (!$con) {
        echo "script error: " .  mysqli_connect_error();
    }else{
        echo "connection : success";
        echo "</br>";
    }

    $query = "SELECT * FROM users, communications, app_config";
    $result = $con->query($query);

    echo "<h1>2440100632 - Jayawardhana Bayu Krisnatama EkaPutra</h1>";
    echo "</br>Show Table From Database tranqsite.sql</br>";

    while($row = mysqli_fetch_array($result)){
        echo "</br>id : " . $row["id"]. " " 
        . "username : " . $row["username"]. " " 
        . "email : " . $row["email"]. " "
        . "role : " . $row["role"]. "
        </br>";
    }

?>