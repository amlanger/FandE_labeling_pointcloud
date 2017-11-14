<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labelv2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM `labels` WHERE `id`= $id";

if ($conn->query($sql) === TRUE) {
    echo  $_POST['id'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
