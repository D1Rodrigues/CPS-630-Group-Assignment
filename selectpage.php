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
            <li> 
                <a class='DD btn black-text white' href='#' data-target='dropdown1'>DB Maintain</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="">Search</a></li>
                    <li><a href="insertpage.php">Insert</a></li>
                    <li><a href="deletepage.php">Delete</a></li>
                    <li><a href="selectpage.php">Select</a></li>
                    <li><a href="updatepage.php">Update</a></li>
                </ul>
            
             </li>
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
                            <div class = \"modal-content\">
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
</body>
    <h4 class ="center"> Select User </h4>
    <form> 
    <div class ="row"> 
            <div class = "row"> 
                <div class ="input-field col s4 offset-s1">
                    <input placeholder="Table Name" id ="TName" name = "TName" type="text" class="validate">
                    <label for = "TName"> Table Name </label>
                </div> 
                <div class ="input-field col s4 offset-s1">
                    <input placeholder="Conditions" id ="Conditions" name = "Conditions" type="text" class="validate">
                    <label for = "Conditions"> Conditions </label>
                </div> 
            </div>
            <div class ="row"> 
                    <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Select</button>
            </div>
    </form> 
        
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){ 
      $('#demo-carousel').carousel({fullWidth:true, indicators:true});
      setInterval(function(){ $('#demo-carousel').carousel('next');},4500);
  });
  $(document).ready(function(){ 
      $(".modal").modal();
  });
  $(document).ready(function(){
        $('select').formSelect();
        });
        $('.DD').dropdown();
</script>
</html> 