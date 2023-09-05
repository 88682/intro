<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/PNG" href="../media/icon.png">

    <script src="https://kit.fontawesome.com/d02b5e525a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Noto+Sans:wght@300;400;500&family=Open+Sans:wght@300;400&family=Work+Sans:wght@300;400&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="../css/home.css" />
    <script src="../js/home.js"></script>

    <title>Portfolio - Mariam Chamseddin</title>
</head>

<body>
    <header>

        <ul class="nav-bar">
            <li><a href="https://88682.stu.sd-lab.nl/intro/home.php#C1" target="_blank">Home</a></li>
         <li><a href="https://88682.stu.sd-lab.nl/intro/home.php#C2" target="_blank">About</a></li>
         <li><a href="https://88682.stu.sd-lab.nl/intro/home.php#C3" target="_blank">Projects</a></li>
         <li><a href="https://88682.stu.sd-lab.nl/intro/home.php#C4" target="_blank">Skills</a></li>
            <li><a href="https://88682.stu.sd-lab.nl/intro/home.php#C5" target="_blank">Contact</a></li>
        </ul>

    </header><br><br>


\


            <h1>Projects Uploader</h1>

            <div class="containerform">

                <form action="projects_verwerk.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

                    <label>Title:</label><br>
                    <input type="text" name="title" placeholder="Title.." maxlength="30" required><br>

                    <label>Date:</label><br>
                    <input type="date" name="date" placeholder="Made on.." required><br>

                    <label>Upload image:</label><br>
                    <input type="file" name="image" id="fileToUpload"><br>

                    <label>About this project:</label><br>
                    <textarea name="about" placeholder="Info about the project..." style="height:200px" minlength="10"
                     maxlength="500" required></textarea><br>

                    <input type="submit" value="publish Project">

                </form>
            </div>
        </div>


    <div class="typewriter">
    </div>
    <h1>
        <a href="" class="typewrite" data-period="2000" data-type='[ "Some of my work so far...", "My projects:" ]' style="color: #5062ae; text-decoration: none;">
            <span class="wrap"></span>
        </a>
    </h1>

    <div class="container-slide">
    <span id="wss"></span>
    <script>wss_elem = document.getElementById("wss"); wssSlide(); </script>
    </div><br>



    <div class="place"></div>
    <div class="project_container">

        <style>
            .project_container img:hover {
                transform: scale(3.5);
            }

        </style>



<?php

include 'config.php';

$sql = "SELECT * FROM projects";
// WHERE ID = url param
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div style="display: flex;  flex-wrap: wrap; justify-content: space-evenly; margin: 5vw;  animation: 1s ease-out 0s 1 slideInFromLeft;">';

    while ($row = $result->fetch_assoc()) {
        echo '<div style="box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.2); border: 1px solid #80828a; padding: 6vh 3vw; flex: 0 0 30%; margin-bottom: 2vw; ">';
        echo "<p>{$row['title']}</p>";
        echo "<hr>";
        echo "<p>{$row['date']}</p>";
        echo "<img style='max-width: 60%; border-radius: 5px;  box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);' class='project-img' src='../media/{$row['image']}' alt='Project Image' />";
        echo "<p >{$row['about']}</p>";
        echo "<p><a href='verwijderpagina.php?id={$row['nummer']}' style='padding: 7px 13px; border: none; border-radius: 4px; cursor: pointer; background-color: #141414; color: white; text-decoration: none; margin-top: 2vw'> Delete</a></p>";
        echo "<p><a href='updatepagina.php?id={$row['nummer']}' style='padding: 7px 13px; border: none; border-radius: 4px; cursor: pointer; background-color: #141414; color: white; text-decoration: none; margin-top: 2vw'> Edit</a></p>";
        echo '</div>';
    }

    echo '</div>';
} else {
    echo 'No data found.';
}

$conn->close();

?>

    </div>



    <footer id="footer">
        <br>
        <hr>
        <div class="flex-containerfooter">
            <div class="flex-itemfooter"><i class="fa-regular fa-envelope"></i>: 088682@glr.nl</div>
            <div class="flex-itemfooter"><i class="fa-solid fa-phone"></i>: 0612345678</div>
            <div class="flex-itemfooter"><i class="fa-brands fa-facebook"></i>: blank</div>
            <div class="flex-itemfooter"><i class="fa-brands fa-instagram"></i>: blank</div>
            <div class="flex-itemfooter"><i class="fa-brands fa-linkedin"></i>: blank</div>

        </div>

       <h1>Mariam Chamseddin</h1>
        <p class="rechten">© Mariam Chamseddin-2023 All rights reserved</p>
        <br>
    </footer>

</body>

</html>