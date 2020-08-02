<?php
    
    require '../config/config.php';

 	if (isset($_POST['submitBtn'])) {

        $lastName = $_POST ['lname'];
        $firstName = $_POST ['fname'];
        $middleName = $_POST ['mname'];
        $birthdate = $_POST ['bdate'];
        $userName = $_POST ['username'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        $cpassword = $_POST ['cpassword'];
       
        if ($password == $cpassword) {
       


            /* create fetching query */
            $checkUserName = "SELECT * FROM `teachers` WHERE `username` = '$userName' ";
            /* execute the query */
            $ifUserNameExist = $conn->query($checkUserName);

            /* check if there is existing username */
            if ($ifUserNameExist->num_rows > 0) {
                echo '<script type= "text/javascript"> alert ("Username already exists. Try another username.") </script>';
            } else {
                /* create insert query */
                $query = "INSERT INTO `teachers` (last_name,first_name,middle_name, birthdate, username, email, password) VALUES ('".$lastName."','".$firstName."','".$middleName."','".$birthdate."','".$userName."','".$email."','".$password."')";
                
                /* execute the query */

                if ($conn->query($query) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $query . "<br>" . $conn->error;
                }
            }
        } else {
            echo '<script type= "text/javascript"> alert ("Password and Confirm password does not match") </script>'; 
        }
    }
?>