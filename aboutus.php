<?php
    session_start();
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <meta name = "viewport" content = "width-device-width, intial-scale = 1.0"> 
        <meta charset = "UTF-8">
        <link rel="icon" href="Pictures/favicon-32x32.png"> 
        <link rel="stylesheet" href = "P_Style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title> DND FASHION</title>
    </head>
<body> 
<nav class = "nav-wrapper white"> 
        <ul id = "nav-mobile" class="left hide-on-med-and-down">
            <!-- Home -->
            <li> 
                <a class="btn-flat black-text" href ="P_Home.php">Home</a>
             </li>
             <!-- About Us -->
             <li> 
                <a class="btn-flat black-text" href = "aboutus.php">About Us</a>
             </li>
             <!-- Contact Us -->
             <li> 
                <a class="btn-flat black-text" href = "contact-us.php">Contact Us</a>
             </li>
             <!-- Reviews -->
             <li> 
                <a class="btn-flat black-text" >Reviews</a>
             </li>
             <li> 
            
             
        </ul>
            <a href="#" class="brand-logo center"> <img src = "Pictures/D_Logo(1).png" class = "Dman" ></a>
       
        <ul id = "nav-mobile" class="right hide-on-med-and-down"> 
            <!-- Sign-in modal  Note: Add in "Not a member? Sign-up now" link -->
            <?php  
                if(isset($_SESSION['email'])){
                    echo "<li> <a class=\"btn-flat black-text\" href = \"logout.php\">Logout</a><li>";
                    echo "<li> <a class=\"btn-flat black-text\" href = \"#\">Account</a><li>";
                }
                else{
                    echo "<li> 
                    <a class=\"btn-flat black-text modal-trigger\" href=\"#modal1\">Sign-in</a>
                        <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
                        <div id =\"modal1\" class = \"modal black-text\"> 
                            <div class = \"model-content\">
                                    <br>
                                    <h4 class =\"black-text center\">Sign-in</h4>
                                    <div class =\"row\"> 
                                        <form action=\"signin.php\" method=\"post\"> 
                                            <!-- Account Username -->
                                            <div class = \"row\"> 
                                                <div class =\"input-field col s4 offset-s4\">
                                                    <i class=\"material-icons prefix\">account_circle</i>
                                                    <input placeholder=\"Email or Username\" id =\"login-n\" name = \"login-name\" type=\"text\" class=\"validate\">
                                                    <label for = \"login-name\"> Email or Username </label>
                                                </div> 
                                            </div>
                                            
                                            <!-- Account Password -->
                                            <div class = \"row\"> 
                                                <div class =\"input-field col s4 offset-s4\">
                                                    <i class=\"material-icons prefix \">lock</i>
                                                    <input placeholder=\"Password\" id =\"login-p\" name = \"login-password\"type=\"Password\" class=\"validate\">
                                                    <label for = \"login-name\"> Password </label>
                                                </div> 
                                            </div>
    
                                            <!-- Can't log in? -->
                                            <div class = \"row\">
                                                <label class =\"col offset-s3\">
                                                    <input type = \"checkbox\" class=\"offset-s4\"> 
                                                    <span> Keep signed in? </span>
                                                </label>
                                                <label class =\"col offset-s2\">
                                                    <a href=\"sign-in.html\" class =\"black-text\"> Forgotten Password? </a>
                                                </label> 
                                            </div>
                                
                                            <!-- Submission Button -->
                                            <div class =\"row\"> 
                                                <button class = \"btn waves-effect waves-light col s4 offset-s4 black\" type=\"submit\" name=\"action\">Login</button>
                                            </div>
                                        </form> 
                                    </div>
                                
                            </div>
                        </div>
                    </div> 
                 </li>";
                    echo "<li> 
                    <a class=\"btn-flat black-text modal-trigger\" href=\"sign-up.php\" >Sign-up</a>
                 </li>";
                }
            ?>
             <!-- Shopping Cart -->
            <li> 
            <a class="btn-flat black-text" href = "cart.php" > <i class="material-icons right">shopping_cart</i> Cart</a>
             </li>
        </ul>
       
</nav>
    
    <section class ="container"> 
        <h3> About our staff</h3> 
        <div class= "row"> 
            <h4> Justtin Hoang  </h4>
            <img src ="Pictures/HoangDaddy.jpg" class = "col s2" > 
            <p> Justtin Hoang, or as he's known by his employees as "The genius behind Drip Not Drizzle", is a full stack developer who did 
                balanced share of both the back-end development as well as the front. He was in charge of creating the interactive maps, shopping cart, 
                shopping cart database as well as bug testing and some bug fixing. Mostly focusing on the front end he used Javascript, html and css to acheive his goals. 
            </p>     
        </div>
        <div class ="row">
            <h4> Al Sagun </h4>
    
            <img src ="Pictures/Al.png" class = "col s2" > 
            <p> 
                Al Sagun, or as he's known by his employees as Al "Capone" Sagun, is a front end developer that was in charge of the design and layout of drip not drizzle. 
                Mainly focusing on the front-end, he used the "Materialize" framework to create a sleek and eye-catching design the website. 
                The langauges that his mostly used were: html, javascript, materialize, css and php.
            </p>
        </div> 
        <div class ="row">
            <h4> Dylan Rodrigues </h4>
            <img src ="Pictures/Dylan.jpg" class = "col s2" > 
            <p> 
                Dylan Rodrigues or as he's known by his employees as Dylan "Drip" Rodrigues is a back-end developer that was in charge of mostly everything behind the scenes of the website. 
                This includes everything from the database as well as connecting everything from the database to the main website. He tried to create a complex 
                interconnected database that works both fast and well. Mostly focusing on languages and databases such as PHP and SQL, he also helped out a little with the 
                layout of the website using html and a little css. 
            </p>
        </div> 
    </section>
    

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.parallax').parallax();
  });
  $(document).ready(function(){ 
            $(".modal").modal();
        })
</script>


</html>
