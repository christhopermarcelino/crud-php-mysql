<?php
include("./config.php");

if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $religion = $_POST["religion"];
    $school = $_POST["school"];

    $sql = "UPDATE registrations SET name = '$name', address = '$address', gender = '$gender', religion = '$religion', school = '$school' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: ./student-list.php");
    } else {
        die('Update failed.');
    }
} else {
    die("Access denied.");
}
