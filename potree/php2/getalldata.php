<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labelv2";


$mysqli = new mysqli($servername, $username, $password, $dbname);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM `labels` WHERE 1";
$query = "SELECT `id`,`class`, `utmx`, `utmy`, `utmz`, `geomx`, `geomy`, `geomz`, `rotx`, `roty`, `rotz`, `cloudid`  FROM `labels` WHERE 1";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()){
    foreach ($row as $r)
            {
                print "$r ";
            }
	}
}

/* close connection */
$mysqli->close();
?>
