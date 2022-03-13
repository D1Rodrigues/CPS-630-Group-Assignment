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
        <!--The main body of information -->
        <div class = "container">
    <h4> Contact the Team! </h4>
    <!-- Dylan Information Section -->
    <div class = "row">
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix">people</i>    Dylan Rodrigues:</p>
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> local_phone</i>  Tele: 416-696-6969 </p>
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> email</i>  Email: drod@dnd.ca  </p>
    </div> 

      <!-- Justtin Information Section -->
    <div class = "row">
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix">people</i>    Justtin Hoang:</p>
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> local_phone</i>  Tele: 416-696-6969 </p>
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> email</i>  Email: jhoang@dnd.ca  </p>
    </div>

    <!-- Al Information Section -->
    <div class = "row">
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix">people</i>    Al Sagun:</p>
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> local_phone</i>  Tele: 416-696-6969 </p>
        <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> email</i>  Email: aSag@dnd.ca  </p>
    </div> 
    

    <h4>Ask us a question!</h4>
    <!-- Question Forms -->
    <div class ="row">
        <form action="contactform.php" method="post">
        <!-- Customer Name -->
        <div class ="row"> 
            <div class ="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input placeholder="Name" id ="nameS" name = "name" type="text" class="validate">
            <label for = "nameS"> Name </label>
            </div> 
        </div>

         <!-- Customer Email -->
        <div class ="row"> 
            <div class ="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input placeholder="Email" id ="mailS" name = "mail" type="text" class="validate">
            <label for = "mailS"> Email </label>
            </div> 
        </div>

        <!-- Customer Question -->
        <div class ="row"> 
            <div class ="input-field col s6">
            <i class="material-icons prefix">question_answer</i>
            <input placeholder="Question" id ="QnA" name = "question" type="text" class="validate">
            <label for = "QnA"> Question </label>
            </div> 
        </div>

        <!-- Submit Button -->
        <div class ="row"> 
            <button class = "btn waves-effect waves-light col s6  grey" type="submit" name="action">Submit</button>
        </div>
    </form>
    </div>

        </div>

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