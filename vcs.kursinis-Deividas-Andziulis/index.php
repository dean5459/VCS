<?php
    require 'db.php';
    require 'klase.php';
    $pdo = dbConn();
    $numbers = totalUsers($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursinis darbas</title>
    <script src="https://kit.fontawesome.com/adaa5eca50.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sintony:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="top">
        <div class="top-filter">
            <div class="first-container">
                <nav class="">
                     <ul class="flex-container main-nav">
                          <li><a href="#" class="test">Sign up</a></li>
                          <li><a href="#">Log In</a></li>
                          <li><a href="#">Support</a></li>
                     </ul>
                </nav>
                <h1>Builder.io</h1>
                <p>Builder.io lets you generate unique HTML website templates talloried for desigers</p>
                <a href="#" class="cyan-btn">SIGN UP</a><br>
                <img src="css/images/TopPic-compressor.jpg" alt="Picture of a forest" class="center none">
            </div>
        </div>
    </section>
    <section class="sec-container">
        <div class="responsive-display">
                <a href="#" class="btn-get-started">GET STARTED</a>
                <a href="#" class="btn-try-demo">TRY DEMO</a>
            </div>
            <h2>Built for creative folk</h2>
            <p class="sec-container-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing elit</p>
    </section>
    <section class="phone">
        <div class="flex-container container">
        <div class="third-container">
            <h2>Work with your hands</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn-get-started">CREATE ACCOUNT</a>
        </div>
        <div class="third-container">
            <h2>Optimised for the road</h2>
            <p>Builder not only works great on a desktop or laptop but has also been optimised to be just as easy to use on a table or mobile device</p>
        </div>
        </div>
        <div class="overflow fourth-container">
            <h2>Take a look inside</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <div class="responsive-display">
                <a href="#" class="cyan-btn">TAKE MY MONEY</a>
                <a href="#" class="btn-get-started">FREE ACCOUNT</a>
            </div>
        </div>
    </section>
    <section class="video">
            <a data-fancybox="gallery" href="https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_480_1_5MG.mp4">
                <img class="responsive" src="css/images/video.jpg" />
            </a>
    </section>
    <section class="flex-container container">
        <div class="fifth-container">
            <i class="fas fa-chart-area"></i>
            <h2>Pick your layouts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <a href="#">Create Account here</a>
        </div>
        <div class="fifth-container">
            <i class="fas fa-archive"></i>
            <h2>Export</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <a href="#">See Pricing</a>
        </div>
        <div class="fifth-container">
            <i class="fas fa-expand-arrows-alt"></i>
            <h2>Edit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <a href="#">View Support Documents</a>
        </div>
    </section>
    <section class="sixth">
        <div class="sixth-container purple">
            <h2 class="purple">CHOOSE A SUBSCRIPTION</h2>
            <p class="purple">A interface built by designer, for designers. What a clice tag line lol</p>
        </div>
        <div class="flex-container container sixth-justify">
            <div class="borderless">
                <div class="sixth-container-border">
                        <h3>FREE ACCOUNT</h3>
                    <p class="gray">Great for giving a try or the one off web designer</p>
                    <p>Free</p>
                    <hr>
                    <p>Save up to 2 layouts</p>
                    <hr>
                    <p>Export 1 HTML template</p>
                    <hr>
                    <p>15 Layout Options</p>
                    <hr>
                    <p>Tweet to get more layouts</p>
                    <button type="button" class="btn-try-demo aa">SIGN UP <i class="fa fa-check" aria-hidden="true"></i>
</button>
                </div>
                <p class="sintony">Join <b class="purple"><?= $numbers[0]->user_number; ?></b> users</p>
            </div>
            <div class="borderless">
                <div class="sixth-container-border-1">
                        <h3>YEARLY SUBSCRIPTION</h3>
                    <p class="gray">Great for giving a try or the one off web designer</p>
                    <p><b class="yearly">$89</b> yearly</p>
                    <hr>
                    <p>Save unlimited layouts</p>
                    <hr>
                    <p>Export unlimited HTML templates</p>
                    <hr>
                    <p>Over 30 Layout Options &amp; counting</p>
                    <hr>
                    <p>New Layouts added monthly</p>
                    <hr>
                    <p>Learning Documentation</p>
                    <button type="button" class="btn-get-started bb">SIGN UP <i class="fa fa-check" aria-hidden="true"></i>
</button>
                </div>
                <p class="sintony">Join <b class="purple"><?= $numbers[1]->user_number; ?></b> users</p>
            </div>
        </div>
    </section>
    <section class="mountains">
        <div class="top-filter-mountains"></div>
        <div class="white-block"></div>
        <img class = "center-ipad" src="css/images/Ipad_03-compressor.png" alt="Ipad image">
    </section>
    <div class="purple-block"><a href="#" class="cyan-btn">TAKE MY MONEY</a></div>
    <section class="contact">
        <div class="container">
            <div class="sec-container">
                <h2>Contact us</h2>
            </div>
            <div class="section-content">
                <form action="index.php" method="post" class="contact-form">
                    <div class="input-row">
                        <input type="text" name="name" placeholder="Your Name Here" required />
                        <input type="email" name="email" placeholder="Your Email Here" required />
                    </div>
                    <textarea name="message" rows="8" placeholder="Your Message Here" required></textarea>
                    <button type="submit" class="btn-try-demo" name="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </section>
    <section class="flex-container container ninth-container">
            <div class="ninth-container-col">
                <ul>
                    <li><b class="h5">BUILDER.IO</b></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="ninth-container-col">
                <ul>
                    <li><b class="h5">COMPANY</b></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="ninth-container-col">
                <ul>
                    <li><b class="h5">LEARNING</b></li>
                    <li><a href="#">Support articles</a></li>
                    <li><a href="#">Support Documentation</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">How to Videos</a></li>
                </ul>
            </div>
    </section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="dist/jquery.fancybox.min.js"></script>
<script src="php5/custom.js"></script>
</body>
</html>
