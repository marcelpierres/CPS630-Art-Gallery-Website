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
    $artname = $_POST['artname'];
    $doc = $_POST['datecreate'];
    $doc = (string)$doc; 
    $colour =  $_POST['colour'];
    $dim =  $_POST['dim'];
    $price = $_POST['price'];
    $genre = $_POST['genre'];
    $artist = $_POST['artist'];
    $location = $_POST['location'];
    
$sql = "INSERT INTO artworks (genre_id, art_name, art_doc, art_colour, art_dim, art_location, art_artist, art_price) VALUES ( '$genre', '$artname', '$doc','$colour', '$dim', '$location', '$artist' ,'$price')";   
  

    

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>