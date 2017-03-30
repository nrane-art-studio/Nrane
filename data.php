<?php

//$conn = new mysqli($servername, $username, $password, $dbname);
//    // Check connection
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];

if ($_POST["fname"] && $_POST["lname"] && $_POST["mail"]) {
    echo " Անուն - ".$fname."<br>";
    echo " Ազգանուն - ".$lname."<br>";
    echo " Էլ․ հասցե - ".$mail."<hr>";
} else {
    echo "Սխալ կա";
};
?>
