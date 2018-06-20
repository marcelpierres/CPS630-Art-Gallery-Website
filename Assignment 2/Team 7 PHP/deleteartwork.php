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
    $title = $_POST['title'];
    echo($title);
    $artname = $_POST['artname']
    $doc = $_POST['datecreate'];
    $doc = (string)$doc;
    $colour =  $_POST['colour'];
    $dim =  $_POST['dim'];
    $price = $_POST['price'];
    $genre = $_POST['genre'];
    $artist = $_POST['artist'];
    $location = $_POST['location'];
    
    $sql = "DELETE FROM artworks WHERE art_name=". $artname;
    
    
    if (mysqli_query($conn, $sql)) {
        echo "New record DELETED successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>