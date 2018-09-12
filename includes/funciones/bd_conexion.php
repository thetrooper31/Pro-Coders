<?php
$conn = new mysqli("localhost", "root", "root", "gdlwebcamp");
if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}


$conn->set_charset("utf8")
?>














