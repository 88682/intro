<?php


require_once 'config.php';
// Haal alle parameters uit de $_POST

$title = $_POST['title'];
$date = $_POST['date'];
$about = $_POST['about'];




$image = $_FILES["image"];
$map = "../media";
$tijdelijk = $image["tmp_name"];
$bestandsnaam = $image["name"];

echo "Verplaats $tijdelijk naar $map / $bestandsnaam... <br/>";

if (move_uploaded_file($tijdelijk , $map."/".$bestandsnaam)){
    echo "$bestandsnaam is ge-upload!";
}
else{
    echo "FOUT bij uploaden $bestandsnaam";
}

// prepare and bind


$stmt = $conn->prepare("INSERT INTO projects (title, date, image, about) VALUES (?, ?, ?,?)");

$stmt->bind_param("ssss", $title, $date, $bestandsnaam, $about);

$stmt->execute();
var_dump($stmt);
echo "New records created successfully";

header("Location: projects.php");


$stmt->close();
$conn->close();








