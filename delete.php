<?php
include("./config.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM registrations WHERE id = $id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: ./student-list.php");
    } else {
        die("Deletion failed.");
    }
} else {
    die("Access denied.");
}
