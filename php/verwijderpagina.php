<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM `projects` WHERE `nummer`='$id'";

    $result = $conn->query($sql);


    if ($result === TRUE) {
        header("Location: projects.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();

