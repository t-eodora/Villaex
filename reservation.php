<!DOCTYPE html>

<html>
    <head>  
    <title>Villaex</title>
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
                        <a href="index.php" class="nav-link" >Home</a>
                        <a href="booking.php" class="nav-link  active" >Booking</a>
                        <a href="services.php" class="nav-link">Services</a>
                        <a href="about.php" class="nav-link" >About</a>
                        <a href="login.php" class="nav-link" >Log In</a>
                        <a href="register.php" class="nav-link" >Register</a>
                    </nav>
                </div>
            </header>
            <!-- END HEADER -->
            <?php 
            echo $price;
            ?>	
            

            <div class="page">

                <p class='pricePD'></p>

                <div class="from-date">
                    <p>From:</p>
                    <select name="from-day" id="from-day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    <select name="from-month" id="from-month">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="from-year" id="from-year">

                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>

                    </select>
                </div>
                <div class="to-date">
                <p>To:</p>
                    <select name="to-day" id="to-day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    <select name="to-month" id="to-month">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="to-year" id="to-year">

                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>

                    </select>

                </div>   
                

            <div class='radio'>
                <p>Would you like to include a service with your rental?</p>
                <input type="radio" id="car" name="service" value=250>
                <label for="car">Car(150$)</label><br>
                <input type="radio" id="yacht" name="service" value=750>
                <label for="yacht">Yacht Charter(450$)</label><br>
                <input type="radio" id="Catering" name="service" value=400>
                <label for="catering">Catering(300$)</label><br>
                <input type="radio" id="jet" name="service" value=1200>
                <label for="jet">Private Jet(1200$)</label><br>
                <input type="radio" id="none" name="service" value=0>
                <label for="none">No, thank you!</label>
            </div>
        

            <button id="calculate-button" style="margin:10px 0px; color: white; background: #090a33;">Make a reservation!</button>
                <p>Reservation: <br>
                <span id="days-diff"></span> <br>
                <span id="nameSpan"></span><br>

                <span id="priceSpan"></span><br>
                <span id="timeSpan"></span><br>

            </p>
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
                <script>
                    let price = sessionStorage.getItem('pricePerDay')
                    console.log(price)
                    document.getElementsByClassName("pricePD")[0].innerHTML = 'Price: ' + price + "$ per day.";
                </script>
                <script type="text/javascript" src="script.js"></script>
                <script src="main.js"></script>

                <!-- END SCRIPTS -->

        </body>


</html>