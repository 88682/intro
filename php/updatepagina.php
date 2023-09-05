<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = $_GET['id'];
    $newtitle = 'new_title';
    $newabout = 'new_about';

// SELECT * FROM projects where nummer = id
    // toon dit in de html formulier velden

//    $sql = "UPDATE `projects` SET `title` = '$newtitle', `about` = '$newabout' WHERE `nummer` = '$id'";




//    $result = $conn->query($sql);


//    if ($result === TRUE) {
//        header("Location: projects.php");
//        exit;
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
}

//$conn->close();
