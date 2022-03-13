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
            <li> 
                <a class="btn-flat black-text" href ="P_Home.php">Home</a>
             </li>
             <li> 
                <a class="btn-flat black-text" href = "aboutus.php">About Us</a>
             </li>
             <li> 
                <a class="btn-flat black-text" href = "contact-us.php">Contact Us</a>
             </li>
             <li> 
                <a class="btn-flat black-text" >Reviews</a>
             </li>
             <li> 
            
             
        </ul>
            <a href="P_Home.html" class="brand-logo center"> <img src = "Pictures/D_Logo(1).png" class = "Dman" ></a>
       
        <ul id = "nav-mobile" class="right hide-on-med-and-down"> 
            <li> 
                <a class="btn-flat black-text" href="sign-in.php">Sign-in</a>
             </li>
             <li> 
                <a class="btn-flat black-text" href ="sign-up.php" >Sign-up</a>
             </li>
            <li> 
            <a class="btn-flat black-text" href = "cart.php" > <i class="material-icons right">shopping_cart</i> Cart</a>
             </li>
        </ul>
       
    </nav>
    <br> 
    <br> 
    <br>
    <!-- Sign in information -->
    <div class ="row"> 
        
        <h4 class = "center"> Sign in </h4>
        <p class = "center" style="color: lightgrey; font-size:15px;">For everything Drip Not Drizzle. A community for everything street wear </p>
        <form action="signin.php" method="post"> 
            <!-- Account Username -->
            <div class = "row"> 
                <div class ="input-field col s4 offset-s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input placeholder="Email or Username" id ="login-n" name = "login-name" type="text" class="validate">
                    <label for = "login-name"> Email or Username </label>
                </div> 
            </div>
            
            <!-- Account Password -->
            <div class = "row"> 
                <div class ="input-field col s4 offset-s4">
                    <i class="material-icons prefix">lock</i>
                    <input placeholder="Password" id ="login-p" name = "login-password"type="Password" class="validate">
                    <label for = "login-name"> Password </label>
                </div> 
            </div>
            <!-- Keep Signed in? -->
            <div class = "row">
                <label class ="col offset-s4 ">
                    <input type = "checkbox" class="offset-s1"> 
                    <span> Keep signed in? </span>
                </label>
            </div>
            <br> 
            <!-- Submission Button -->
            <h4 class = "center" style="color:lightgrey; font-size:15px;" >By logging in you agree to Drip not Drizzle's Private Policy and Terms of Use. You forfeit your soul </h4>
            <div class ="row"> 
                <button class = "btn waves-effect waves-light col s2 offset-s5 black" type="submit" name="action">Login</button>
            </div>
            <h4 class = "center" style="color:lightgrey; font-size:15px;" > 
                Not A Member? <a href = "sign-up.html">Register Now!</a> 
               <h4>
    </div>
    <br>
    <br>
    </form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>


</html>