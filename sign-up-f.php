<?php
   require_once 'config.php';

    $fname = $_POST["signup-fname"];
    $lname = $_POST["signup-lname"];
    $email = $_POST["signup-email"];
    $password = $_POST["signup-pass"];
    $date = $_POST["signup-date"];
    $gender = $_POST["gender"];
    $errors = array(); 

    echo $fname . "<br>";
    echo $lname . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $date . "<br>";
    echo $gender . "<br>";

    //form validation: check if all fields are filled
    //if not, put them into $errors array
    if(empty ($fname) || empty ($lname))
    {
        array_push($errors, "First and last name are required.");
    }
    if(empty($email))
    {
        array_push($errors, "Email is required.");
    }
    if(empty($password))
    {
        array_push($errors, "Password is required.");
    }
    if(empty($date))
    {
        array_push($errors, "Date is required.");
    }
    if(empty($gender))
    {
        array_push($errors, "Gender are required.");
    }

    //check if email already exists in the database
    $user_check_email = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($user_check_email);
    
    if ($result->num_rows > 0) { // if user exists
        array_push($errors, "Email already exists");
    }

    //if there are errors then register user by putting their details into databse
    if(count($errors) == 0)
    {
        $sql = "INSERT INTO Users (firstname, lastname, email, pswd, dob, gender) 
                VALUES('$fname', '$lname', '$email', '$password', '$date', '$gender')";

        if ($conn->query($sql))
        {
            echo ("You are logged in successfully!");
        }	
    }
    else //if there any errors, tell user to try start again
    {
        foreach ($errors as $errorWarning)
        {
            echo $errorWarning . "<br>";
        }
        echo "Please go back and try again.";
    }



?>
