<?php 

$host = "localhost";
$username = "root";
$password = "root";
$database = "waqqly";

$mysqli = new mysqli($host, $username, $password, $database);

function getUsers() {
    global $mysqli;
    $sql = "SELECT jsonData FROM users";
    $result = $mysqli->query($sql);

    if (!$result){
        die("Error executing query: " . $mysqli->error);
    }

    $users = [];

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $users[] = $row["jsonData"];
        }
    }
    
    $mysqli->close();
    return $users;
}

?>