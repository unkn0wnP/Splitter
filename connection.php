<?php

    //remote mysql
    $servername = "localhost";
    $username = "id18877969_root";
    $password = "PrinceGadhiya_7657";
    $db="id18877969_splitter";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    if(!$conn)
    {
        die("Connection failed: " . $conn->connect_error());
    }
?>