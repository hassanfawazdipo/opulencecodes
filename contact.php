<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Opulence Codes Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="IT Company Website Template" name="keywords">
        <meta content="IT Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/opulence fav.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 

        <!-- Libraries CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="index.html" class="navbar-brand">
                        <img src="img/opulence.png" alt="Logo">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <!-- <a href="portfolio.html" class="nav-item nav-link">Portfolio</a> -->
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav End -->

        <!-- Contact Start -->
        <div class="contact mt-100">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <form action="message.php" method="post" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" name="send" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361250.667320687!2d-113.75533773453304!3d36.24128894212527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1574923227698!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>About Us</h4>
                            <ul>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="index.php">Home</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="about.php">About us</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="service.php">Our services</a></li>
                                <!-- <li><i class="ion-ios-arrow-forward"></i> <a href="review.php">Review</a></li> -->
                                <li><i class="ion-ios-arrow-forward"></i> <a href="skill.html">SKills</a></li>
                            </ul>
                        </div>

                     

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                1 Bola Hassan<br>
                                Alapere, Lagos<br>
                                Nigeria  <br>
                                <strong>Phone:</strong> +234-808-6556-841<br>
                                <strong>Email:</strong> opulencecodes@gmail.com<br>
                            </p>
<!-- 
                            <div class="social-links">
                                <a href="#"><i class="ion-logo-twitter"></i></a>
                                <a href="#"><i class="ion-logo-facebook"></i></a>
                                <a href="#"><i class="ion-logo-linkedin"></i></a>
                                <a href="#"><i class="ion-logo-instagram"></i></a>
                                <a href="#"><i class="ion-logo-googleplus"></i></a>
                            </div> -->

                        </div>

                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Subscription</h4>
                            <p>Join our newsletter for exclusive updates, design tips, and insights on transforming your digital presence!</p>
                            <form action="newsletter.php" method="post">
                                <input type="email" name="email"><input type="submit" name="Subscribe"  value="Subscribe">
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                <div class="col-md-6 copyright">
                        Copyright &copy; <?php echo date("Y"); ?> <a href="">Opulence Codes</a>. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

        <!-- Libraries JS -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Main Javascript -->
        <script src="js/main.js"></script>

    </body>
</html>
