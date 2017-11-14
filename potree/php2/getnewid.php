<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labelv2";


$sql = "SELECT MAX(`id`) FROM `labels` WHERE 1";

$mysqli = new mysqli($servername, $username, $password, $dbname);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT MAX(`id`) FROM `labels` WHERE 1";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    $row = $result->fetch_assoc() ;
if (is_numeric(implode(", ", $row))){
 printf( implode(", ", $row) +1 );
}else{
printf(0);
}



}

/* close connection */
$mysqli->close();
?>
