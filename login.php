<?php 
include("server.php");
session_start();
?>
<!DOCTYPE html>

<html>
    <head>  
    <title>Villaex | Log In</title>
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
                        <a href="index.php" class="nav-link " >Home</a>
                        <a href="booking.php" class="nav-link" >Booking</a>
                        <a href="services.php" class="nav-link">Services</a>
                        <a href="about.php" class="nav-link" >About</a>
                        <a href="#" class="nav-link active" >Log In</a>
                        <a href="register.php" class="nav-link" >Register</a>
                    </nav>
                </div>
            </header>
            <!-- END HEADER -->

            <!-- START FORM -->

            <div class="page">

                <form method="post" action="">
                    
                    <div class="input-group">    
                        <input type="email" id="mail" name="email" placeholder="email" required/><br/>
                    </div>    
                    <div class="input-group">            
                        <input type="password" id="password" name="password" placeholder="password" required/><br/>
                    </div>


                    <div class="input-group">
                        <button type="submit" class="btn" name="logButton" style="font-size:16px; ">Login</button>
                    </div>
                    <p style="font-size:20px; font-weight:bold;">
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                        
            </div>
            <!-- END FORM -->

            <!-- START PHP -->
            
            <?php 
	               if(isset($_POST['logButton'])){
	
		            $c_email = $_POST['email'];
		            $c_pass = $_POST['password'];
                    
                       
                       
                    $sel_c = "select * from user where password='$c_pass' AND email='$c_email'";
                    $res_e = $object->query($sel_c) or die('greska');
                    if(mysqli_num_rows($res_e) == 0){
                        echo 'Nije dobar mail ili sifra!' . '<script>alert("Email or passwor is incorrect!")</script>';;
                         $_SESSION['logged'] = false;
                        echo $_SESSION['logged']; 
                    }else{
                        $_SESSION['logged'] = true;
                        echo $_SESSION['logged']; 
                        
                        $sql = "select user_id, contact from user where email='$c_email'"; 
                        echo '<script>alert("Logged in successfully")</script>';
                        $client_id = $object->query($sql) or die('greska');
                        while($red = $client_id->fetch_assoc()){
                            $rez =  $red["user_id"];
                            $rez2 = $red["contact"];//c
                            
                        }
                        
                       
                        
                        $cookie_name = "cookie";//c
	                    $cookie_value = $rez2;//c

	                    setcookie($cookie_name, $cookie_value, time() + (86400*7), "/");
                        
                        
                        $_SESSION['client_id'] = $rez;
                        echo $_SESSION['client_id'];
                    }

                }
	
	
	           ?>

            <!-- END PHP -->


            

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