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

$sql = "SELECT genre_id, art_name, art_doc, art_colour, art_dim, art_location, art_artist, art_price FROM artworks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "genre: " . $row["genre_id"]. " - artname: " . $row["art_name"]. " artdoc: " . $row["art_doc"]. " artcolour: " . $row["art_colour"]. " artdim: " . $row["art_dim"]. " artlocation: " . $row["art_location"]. " art_artist: " . $row["art_artist"]. " artprice: " . $row["art_price"]. "<br>";
    }
} else {
    echo "0 results";
}





    
    mysqli_close($conn);
?>