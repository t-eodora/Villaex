<!DOCTYPE html>
<?php 
include("server.php"); 
?>
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
                        <a href="#" class="nav-link  active" >Booking</a>
                        <a href="services.php" class="nav-link">Services</a>
                        <a href="about.php" class="nav-link" >About</a>
                        <a href="login.php" class="nav-link" >Log In</a>
                        <a href="register.php" class="nav-link" >Register</a>
                    </nav>
                </div>
            </header>
            <!-- END HEADER -->

            <div class="page" id="booking">
            
                <div class="sort">
               <form name="nmp" method="POST" style="background-color:#090a337a; margin: 0px; padding:0px; width:40%;  border-radius: 10px; position:absolute; top:120px; left:480px;">
                   <div id="sorts">
                       
                   <label>Sort by: </label><br/>
                    <input type="radio" id="name" name="sort" value="name">
                    <label for="name">Name</label>
                    <input type="radio" id="priceA" name="sort" value="priceAsc">
                    <label for="priceA">Price Asending</label>
                    <input type="radio" id="priceD" name="sort" value="priceDesc">
                    <label for="priceD">Price Desending</label>
                    <input type="radio" id="rooms" name="sort" value="rooms">
                    <label for="rooms">Rooms</label>
                    <input type="radio" id="people" name="sort" value="people">
                    <label for="people">Number of People</label><br/>
                       <input type="submit" value="SORT">
                       
                   </div>
                </form>
                </div>
                <div class="offers">
                <?php 
                
                if(isset($_POST['sort'])){
                    $radio = $_POST['sort'];
                    
                    if($radio == "name"){
                        $sql = "SELECT * FROM villa ORDER BY name";                       
                    }else if($radio == "priceAsc"){
                        $sql = "SELECT * FROM villa ORDER BY day_price ASC";
                    }else if($radio == "priceDesc"){
                        $sql = 'SELECT * FROM villa ORDER BY day_price DESC';
                    }else if($radio == "rooms"){
                        $sql = 'SELECT * FROM villa ORDER BY number_of_rooms DESC';
                    }else if($radio == "people"){
                        $sql = 'SELECT * FROM villa ORDER BY number_of_people DESC';
                    }
                    
                }else{$sql = 'SELECT * FROM villa';}

                    $rez = $object->query($sql) or die('Ne mogu da se prikazu podaci');
                    
                    while($red = $rez->fetch_assoc()){       
                        
                        $villaID = $red["villa_id"];
                        
                        $sql = "SELECT images.`name` FROM images WHERE villa_id = $villaID LIMIT 1;";
                        
                        $rez1 = $object->query($sql) or die('Ne mogu da se prikazu podaci');
                        $red1 = $rez1->fetch_assoc();
                        echo "<div class='products' style='display: inline-block; border-radius: 20px; margin-left: 10px;'>";
                        echo '<img src="img/' . $red1["name"] . '" style= "height: 150px;  margin-top:250px;"/><br/>';
                        
                        $id_villa = $red["villa_id"];
                        
                        echo 'Name of the villa: ' . $red["name"] . '<br/>' . 'Roms: ' . $red["number_of_rooms"] . '<br/>' . 'Number of pople it can host: ' . $red["number_of_people"] . '<br/> ' . 'Price per day: ' . $red["day_price"] . '$<br/>';
                        $price =  $red["day_price"];
                        $name  =  $red["name"];

                        echo "<div class='resButton' id='$villaID'>
                            <a class='rent-button' href='reservation.php' price='$price' name='$name' ><p>Rent</p></a> 
                                </div></div>";                       
                    }

                    $object->close(); ?>
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
                <script>
                    let rentButtons = document.getElementsByClassName('rent-button');
                    for (button of rentButtons) {
                        button.addEventListener('click', (event) => {
                            sessionStorage.setItem("villaName", event.target.parentNode.getAttribute('name'))
                            sessionStorage.setItem("pricePerDay", event.target.parentNode.getAttribute('price'))
                            
                        })
                    }
                </script>
               

                <!-- END SCRIPTS -->

        </body>

</html>