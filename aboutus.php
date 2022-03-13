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
                <a class="btn-flat black-text" href = "P_Home.php">Home</a>
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
                <a class="btn-flat black-text modal-trigger" href="#modal1">Sign-in</a>
                    <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
                    <div id ="modal1" class = "modal black-text"> 
                        <div class = "model-content">
                                <br>
                                <h4 class ="black-text center">Sign-in</h4>
                                <div class ="row"> 
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
                                                <i class="material-icons prefix ">lock</i>
                                                <input placeholder="Password" id ="login-p" name = "login-password"type="Password" class="validate">
                                                <label for = "login-name"> Password </label>
                                            </div> 
                                        </div>

                                        <!-- Can't log in? -->
                                        <div class = "row">
                                            <label class ="col offset-s3">
                                                <input type = "checkbox" class="offset-s4"> 
                                                <span> Keep signed in? </span>
                                            </label>
                                            <label class ="col offset-s2">
                                                <a href="sign-in.html" class ="black-text"> Forgotten Password? </a>
                                            </label> 
                                        </div>
                            
                                        <!-- Submission Button -->
                                        <div class ="row"> 
                                            <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action">Login</button>
                                        </div>
                                </div>
                            
                        </div>
                    </div>
                </div> 
             </li>

             <!-- Sign-up-->
             <li> 
                <a class="btn-flat black-text modal-trigger" href="sign-up.php" >Sign-up</a>
                <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
             </li>
             <!-- Shopping Cart -->
            <li> 
                <a class="btn-flat black-text"> <i class="material-icons right">shopping_cart</i> Cart</a>
             </li>
        </ul>
       
    </nav>
    
    <section class ="container"> 
        <h3> About our staff</h3> 
        <div class= "row"> 
            <h4> Justtin Hoang  </h4>
            <p> Justtin Hoang, or as he's known by his employees as "Hoang Daddy", founded Drip Not Drizzle
                in 2022 for a project that he had to created in an extremely short period of time. They were 
                given unrealistic expectations to finish a responsive, styled and technical shopping site in
                less than a week. They were given vague buttons to add, a drag and drop feature that is not 
                used in an actual retail environment and a small group of three that is in charge of creating 
                a database and style that is both appealing an practical. 
            </p>     
        </div>
        <div class ="row">
            <h4> Al Sagun </h4>
            <p> 
                The only one who is in charge of most of the front-end of Drip Not Drizzle. Since he 
                is the only one who is doing the styling, his job comes last which leads to a lot of time 
            hastened because of working on looks and practicality after functionality. FUCK ME WHY THE FUCK 
            ARE WE CREATING SOMETHING LIKE THIS IN LESS THAN A WEEK AS WELL AS THIS FUCKING PROJECT FOR THE SAME CLASS 
            DURING THE WEEK OF READING WEEK. AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH!
            <!-- You should probably adda a picture of the people involved in the project for each paragraph 
            maybe add their speciality and what they did on the project.-->
            </p>
        </div> 
        <div class ="row">
            <h4> Dylan Rodrigues </h4>
            <p> 
                
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
