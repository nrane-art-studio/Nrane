<?php

<<<<<<< HEAD
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
=======
$connect = new mysqli('localhost', 'root', '', 'nrane');
    // Check connection
    if ($connect->connect_error) {
        echo "asdfcadsfads";
        die("Connection failed: " . $connect->connect_error);
}

// charset
mysqli_query($connect, "SET NAMES UTF8");
// time zone
mysqli_query($connect, "SET time_zone = '+04:00'");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];

if ($_POST["fname"] && $_POST["lname"] && $_POST["mail"]) {
    echo " Անուն - ".$fname."<br>";
    echo " Ազգանուն - ".$lname."<br>";
    echo " Էլ․ հասցե - ".$mail."<hr>";
    $koko = "CREATE TABLE IF NOT EXISTS `test` (
            name varchar(50)
    )";
    if ($connect->query($koko)) {
        echo "Դուք հաջողությամբ բաժանորդագրվել եք։"."<br>";
    } else {
        echo "Չեղավ!!!";
    };
    $lolo = "INSERT INTO test (name) VALUES ('$fname')";

    if ($connect->query($lolo)) {
        echo "Դուք հաջողությամբ բաժանորդագրվել եք։"."<br>";
    } else {
        echo "Չեղավ!!!";
    }



} else {
    echo "Սխալ կա";
};
<<<<<<< HEAD
?>
=======
>>>>>>> origin/master
?>
>>>>>>> origin/master
