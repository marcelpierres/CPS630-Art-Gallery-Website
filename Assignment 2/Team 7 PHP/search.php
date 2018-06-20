<?php
    $servername = "35.231.56.160";
    $username = "root";
    $password = "team7rules!";
    $dbname = "team7data";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $search = $_POST['userin'];
    echo "Hi";
    $sql = "SELECT * FROM artwork WHERE art_name LIKE " . $search;
    echo $search;
    $result = $conn->query($sql);
    echo $result;
    
    mysqli_close($conn);
?> 

