<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/PNG" href="media/icon.png">

    <script src="https://kit.fontawesome.com/d02b5e525a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Noto+Sans:wght@300;400;500&family=Open+Sans:wght@300;400&family=Work+Sans:wght@300;400&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Merriweather:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <script src="js/home.js"></script>

    <title>Portfolio - Mariam Chamseddin</title>
</head>

<body>
    <header>

        <ul class="nav-bar">
            <li><a href="#C1">Home</a></li>
              <li><a href="#C2">About</a></li>
              <li><a href="#C3">Projects</a></li>
              <li><a href="#C4">Skills</a></li>
            <li><a href="#C5">Contact</a></li>
        </ul>

    </header>




        <div>
        <h5 id="C1"> </h5>
        <div class="banner">
            <img src="media/banner1.png" alt="banner">
        </div>


        <div class="main">


            <div class="main1">
                <h5 id="C2">About</h5>

                <h1>About</h1>
                <div class="grid-container-main">
                    <div class="grid-item-main" id="about-foto">
                        <img src="media/me.jpg" alt="banner">
                    </div>

                    <div class="grid-item-main">

                        <h2>
                            <a href="" class="typewrite" data-period="2000" data-type='[ "Hello, Im Mariam.", "A Software Developer" ]' style="color: #5062ae; text-decoration: none;">
                                <span class="wrap"></span>
                            </a>
                        </h2>
                        <p>With a huge passion for transforming ideas into reality using a few lines of code.
                         I have been on an internship at Eneco, I was fascinated with the way they work there, and the company international impact. I like the idea of working at a big international company.
                          Wich is why this page is writen in english. This year i will be following a programm at school to get a cambridge english certificate.
                          My goal is being able to bring all my ideas to life with coding. This page is a short journey of skills I have acquired during my time at Grafisch Lyceum Rotterdam.
                          Enjoy
                          </p>



                        <a href="#C4" class="about-link">View CV</a>

                        <a href="#C5" class="about-link" style="color: #4565C4;"> Say Hi <i class="fa-regular fa-face-grin-stars"></i> </a>



                    </div>

                </div>

            </div>



            <h5 id="C3"> Projects</h5>


            <div class="top" id="top">
                <h1 class="koptekst">Projects </h1>


            </div>



            <div class="grid-container">


                <div class="grid-item">
                    <div class="card">

                        <video autoplay muted loop style="   position: absolute; object-fit: cover; width: 100%; height: 100%; top: 0; left: 0; transition: opacity 0.2s ease-out;">
                            <source src="media/video.mp4" type="video/mp4">
                        </video>
                        <div class="card-content">
                            <h2>
                                <b>Buy/Offer for your dream villa</b>
                            </h2>
                            <p style=" text-shadow: 1px 2px 1px black;">
                                Skills Gained:<sub> Store and Read from the Database, PHP, Darkmode(JS), Cool mouse-scrol slideshow(JS), alot of form restrictions, display 3 highest offers+ how many offers are made +
                                location foto's details etc..<br></sub>
                                TECHNIQUES USED:<sub> HTML, CSS, JS, PHP, PHP my admin and SQL.</sub>
                            </p>
                            <a href="php/projects.php" class="button">
                                Learn more.. <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="grid-item">
                    <div class="card">
                        <div class="card-content">
                            <h2>
                                <b>All Projects...</b>
                            </h2>
                            <p>

                               </p>
                            <a href="php/projects.php" class="button">
                                View all.. <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>








            <h5 id="C4">Skills</h5>
            <h1>Skills</h1>
            <p class="cv"> Feel free to look through my CV as well.<br>(WIP)</p>
            <object data="link" type="application/pdf" class="cv">
                <p><a onclick="window.open('media/cv.pdf')" class="downloadButton1" style="color: #5062ae; cursor: pointer;">View here.</a></p>
              </object>


            <h5 id="C5">Contact</h5>
            <h1>Contact</h1>









            <!-- alle informatie uit dit formulier wordt gestuurd naar mijn email -->

            <div class="containerform">
                <form action="php/form_email.php" method="post" onsubmit="return validateForm()">

                    <label>Name:</label><br>
                    <input type="text" name="name" placeholder="Your name.." maxlength="15" required><br>

                    <label>Telephone number:</label><br>
                    <input type="tel" name="number"
                        placeholder="Telephone number..  Format: 0612345678 or +31612345678"
                        pattern="^(\+31|0)[1-9][0-9]{8}$" required><br>

                    <label>Email:</label><br>
                    <input type="text" name="email" id="email" placeholder="Email.." maxlength="30"
                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required><br>

                        <label>Company name:</label><br>
                    <input type="text" name="company" placeholder="Company.." maxlength="20"><br>

                    <label>Remark/Question:</label><br>
                    <textarea name="message" placeholder="remark/question..." style="height:200px" minlength="10"
                        maxlength="250" required></textarea><br>

                    <input type="submit" value="Send Message">

                </form>
            </div>
        </div>

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