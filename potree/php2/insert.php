<?php
session_start();
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
$class = (string)$_POST['class'];
$utmx = $_POST['utmx'];
$utmy = $_POST['utmy'];
$utmz = $_POST['utmz'];
$geomx = $_POST['geomx'];
$geomy = $_POST['geomy'];
$geomz = $_POST['geomz'];
$rotx = $_POST['rotx'];
$roty = $_POST['roty'];
$rotz = $_POST['rotz'];
$uid = $_SESSION['username'];
$plyID = $_POST['cloudid'];
if (!isset($_SESSION['username'])) {
$uid = "unkown";
}


$sql = "REPLACE INTO `labels`(`id`,`class`, `utmx`, `utmy`, `utmz`, `geomx`, `geomy`, `geomz`, `rotx`, `roty`, `rotz`, `username`,`cloudid` ) VALUES ($id,'$class',$utmx,$utmy,$utmz,$geomx,$geomy,$geomz,$rotx,$roty,$rotz,'$uid','$plyID')";

if ($conn->query($sql) === TRUE) {
    echo  $_POST['id'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
