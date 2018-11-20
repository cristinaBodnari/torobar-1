<?php
    // Connects to the database if credentials and network is ok. Otherwise quits the application
    // For further use, use global $database object
    require_once("credentials.php");
    $database = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_SCHEMA);

    if(mysqli_connect_errno()) {
        $msg = "Connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " ("  . mysqli_connect_errno() . ")";
        exit($msg);
    }

    if($database->connect_error){
        die("Connection failed " . $conn->connect_error);
    }