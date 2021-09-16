<!DOCTYPE html>

<html>
    <head>  
    <title>Villaex | Services</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
        <body>

            <!-- START HEADER -->
             <header id="main-header">
                <div class="container">
                    <div id="nav-logo">
                        <img src="img/logo.png" alt="Logo Image" width="60" height="60">
                        <h1>Villaex</h1>
                    </div>
                    <nav id="nav-main">
                        <a href="index.php" class="nav-link">Home</a>
                        <a href="booking.php" class="nav-link">Booking</a>
                        <a href="#" class="nav-link active" >Services</a>
                        <a href="about.php" class="nav-link" >About</a>
                        <a href="login.php" class="nav-link" >Log In</a>
                        <a href="register.php" class="nav-link" >Register</a>
                    </nav>
                </div>
            </header>
            <!-- END HEADER -->

            <div id="services" class="page">
                
                <div class="column">

                    <h3 class="a-center">SERVICES</h3>
                    <p class="a-center">to make your stay more enjoyable</p>

                        <div class="s-row">  
                            
                                
                                <div
                                class="textOverImage"
                                style="background: url('img/catering.jpg') no-repeat center center/cover;"
                                data-title="Catering"
                                data-text="Professional catering for events, weddings or dinner parties.
                                A private cook who prepares a delicious breakfast, lunch or dinner in your villa.
                                Boat catering.
                                Grocery deliveries to the villa.">
                                </div>

                                <div
                                class="textOverImage"
                                style="background: url('img/yacht.jpg') no-repeat center center/cover;"
                                data-title="Yacht Charter"
                                data-text="You can rent a boat or yacht for a day.
                                Have your holiday at sea or a week on a yacht and a week in a villa.
                                Jet skis and sea bob’s are also available.">
                                </div>
                                
                                
                           
                        </div>

                        <div class="s-row">                          
                          
                            <div
                                class="textOverImage"
                                style="background: url('img/jet.jpg') no-repeat center center/cover;"
                                data-title="Private Jet"
                                data-text="Charter a private plane to your destination and start your luxurious holidays before you even arrive.">
                            </div>
                                                   
                            
                                <div
                                class="textOverImage"
                                style="background: url('img/car.jpg') no-repeat center center/cover;"
                                data-title="Car Rental"
                                data-text="Rent your car through us and the car is waiting for you upon arrival at the airport.
                                From ordinary self-drive cars to luxury and special cars.
                                With or without driver.">
                                </div>
                            
                        </div>

                </div>
                
        
            </div>

            

            <!-- START FOOTER -->
            <footer id="main-footer">
                <div class="container">
                    <div class="footer-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1724.4051614303532!2d20.479968177838373!3d44.78263158506673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1598465186458!5m2!1sen!2srs" 
                        width="270" 
                        height="220" 
                        frameborder="0" 
                        style="border:0;" 
                        allowfullscreen="" 
                        aria-hidden="false" 
                        tabindex="0">
                    </iframe>
                    </div>
                    <div class="footer-center">
                        <div id="levo">
                            <i class="fa fa-map-marker"></i>
                            <i class="fa fa-phone"></i>
                            <i id="contact" class="fa fa-envelope"></i>
                        </div>

                        <div id="desno">
                            <p><span>Danijelova 32</span> Belgrade, Serbia</p>
                            <p>+1.555.555.5555</p>
                            <p><a href="mailto:support@villaex.com">support@villaex.com</a></p>
                        </div>
                      
                    </div>
                    <div class="footer-right">
                        <p>
                            <span>Working hours</span> <br>
                            Monday-Saturday 07:00am - 11:00pm <br>
                            Sunday 10:00am - 08:00pm
                        </p>

                        <div class="footer-icons">

                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>

                        </div>
                    </div>

                </div>

            </footer>

                <div class="footer-credits">

                <div class="container">
                    <p>
                        Made with&nbsp; <span style="color: #9F1D35;">&#10084;</span>&nbsp; by Teodora Milosevic. &copy;
                        <?php echo date("Y"); ?>
                    </p>
                </div>

                </div>
                <!-- END FOOTER -->

                <!-- START SCRIPTS -->

                <script type="text/javascript" src="script.js"></script>

                <!-- END SCRIPTS -->

        </body>

</html>