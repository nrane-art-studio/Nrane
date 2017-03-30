<?php

$connect = new mysqli('localhost', 'root', '', 'nrane');
    // Check connection
    if ($connect->connect_error) {
        echo "asdfcadsfads";
        die("Connection failed: " . $connect->connect_error);
}

// charset
//mysqli_query($connect, "SET NAMES UTF8");
// time zone
mysqli_query($connect, "SET time_zone = '+04:00'");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];

if ($_POST["fname"] && $_POST["lname"] && $_POST["mail"]) {
//    echo " Անուն - ".$fname."<br>";
//    echo " Ազգանուն - ".$lname."<br>";
//    echo " Էլ․ հասցե - ".$mail."<hr>";
    $koko = "CREATE TABLE IF NOT EXISTS `test1` (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
    )";
    if ($connect->query($koko)) {
//        echo "Դուք հաջողությամբ բաժանորդագրվել եք։"."<br>";
    } else {
        echo "Չեղավ  324r!!!<br><br>";
    };
    $lolo = "INSERT INTO test1 (firstname, lastname, email) VALUES ('$fname', '$lname', '$mail')";

    if ($connect->query($lolo)) {
//        echo "Դուք հաջողությամբ բաժանորդագրվել եք։"."<br>";
    } else {
        echo "Չեղավ!!!<hr>";
    }

} else {
    echo "Սխալ կա";
};
?>
