<?php
include("./config.php");

if (isset($_POST["regist"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $religion = $_POST["religion"];
    $school = $_POST["school"];

    $sql = "INSERT INTO registrations (name, address, gender, religion, school) VALUES ('$name', '$address', '$gender', '$religion', '$school')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: ./index.php?status=success");
    } else {
        header("Location: ./index.php?status=failed");
    }
} else {
    die("Access denied.");
}
