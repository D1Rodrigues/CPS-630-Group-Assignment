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
                    <a class="btn-flat black-text" href="P_Home.php" >Home</a>
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
                <li> 
                    <a class="btn-flat black-text modal-trigger" href="sign-in.php">Sign-in</a>
                    
                 </li>
    
                 <!-- Sign-up-->
                 <li> 
                    <a class="btn-flat black-text modal-trigger" href="sign-up.php" >Sign-up</a>
                    <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
                 </li>
                 <!-- Shopping Cart -->
                <li> 
                <a class="btn-flat black-text" href = "cart.php" > <i class="material-icons right">shopping_cart</i> Cart</a>
                 </li>
            </ul>
           
        </nav>
        <br> 
        <br> 
        <br> 
        <section class = "container"> 
                <h4 class = "center"> Sign-up Registration </h4>
                <h4 class = "center" style="color: lightgrey; font-size:15px;">Join us now and join the revolution. You will join.... You will submit</h4>
            <br> 
            <br>
           <form action ="sign-up-f.php" method = "post">
                  <!---First/Last Name -->
                  <div class = "row"> 
                    <div class = "input field col s4 offset-s2"> 
                        <input placeholder ="First Name" id="SU-fname" name="signup-fname" type="text" class="validate">
                        <label for ="SU-fname">First Name </label>
                    </div>
                    <div class = "input field col s4 offset-s1"> 
                        <input placeholder ="Last Name" id="SU-lname" name="signup-lname" type="text" class="validate">
                        <label for ="SU-lname">Last Name </label>
                    </div>
                    </div>
                  <!--- Email/Password -->
                  <div class = "row">
                    <div class = "input field col s4 offset-s2"> 
                        <input placeholder ="Email" id="SU-email" name="signup-email" type="text" class="validate">
                        <label for ="SU-email ">Email </label>
                    </div>
                    <div class = "input field col s4 offset-s1"> 
                        <input placeholder ="Password"  id="SU-pass" name="signup-pass" type="password" class="validate">
                        <label for ="SU-pass "> Password </label>
                    </div>
                  </div>
                  <!-- Date of birth/Gender-->
                  <div class = "row"> 
                    <div class = " col s4 offset-s2"> 
                        <input type = "date" placeholder ="Date of Birth" id="DoB" name="signup-date" class ="datepicker" style ="color:lightgray">
                        <label for ="DoB"> Date of Birth</label>
                    </div> 
                    <div class  = "input-field col s4 offset-s1">
                        <select name="gender">
                            <option value ="" disabled selected> Gender </option>
                            <option value ="Male"> Male </option>
                            <option value ="Female"> Female </option>
                            <option value ="Other"> Other </option>
                            <option value ="AAH"> APACHE ATTACK HELICOPTER </option>
                        </select>
                    </div>
                  </div>
                  <h4 class = "center" style="color:lightgrey; font-size:15px;" >By creating this account you agree to Drip not Drizzle's Private Policy and Terms of Use<h4>
                  <!-- Submission Button-->
                  <div class ="row"> 
                    <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Sign Up</button>
                  </div>
                  <h4 class = "center" style="color:lightgrey; font-size:15px;" > 
                   Already a member? <a href = "sign-in.php">Sign in</a> 
                  <h4>
            </form>
   
        </section> 
        
    </body>
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
    </script>   
</html>
