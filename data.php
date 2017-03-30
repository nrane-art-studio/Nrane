<?php

$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["mail"];

if (isset ($_POST["fname"] && $_POST["lname"] && $_POST["mail"])) {

} else
?>
