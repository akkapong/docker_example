<?php
    $connect = mysqli_connect('mysql_server', 'root', 'password', 'test'); 

    if (!$connect) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    $result  = $connect->query("select * from user where id = 1");
    $records = mysqli_fetch_array($result);
    $name    = $records["firstname"]." ".$records["lastname"]; 

    mysqli_close($connect);

    echo $name; 
