<?php
    
    require '../config/config.php';

 	if (isset($_POST['submitBtn'])) {

        $lastName = $_POST ['lname'];
        $firstName = $_POST ['fname'];
        $middleName = $_POST ['mname'];
        $nameExtension = $_POST ['nameext'];
        $userName = $_POST ['username'];
        $birthDate = $_POST ['bdate'];
        $sex = $_POST ['sex'];
        $email = $_POST ['email'];
        $contactNum = $_POST ['cnumber'];
        $address =$_POST ['address'];
        $gName = $_POST ['gname'];
        $relStu = $_POST ['relstu'];
        $gNumber = $_POST ['gnumber'];
        $gAddress = $_POST ['gadd'];
        $password = $_POST ['password'];
        $cpassword = $_POST ['cpassword'];

        if ($password == $cpassword) {
        
            /* create fetching query */
            $checkUserName = "SELECT * FROM `students` WHERE `username` = '".$userName."' ";
            /* execute the query */
            $ifUserNameExist = $conn->query($checkUserName);

            /* check if there is existing username */
            if ($ifUserNameExist->num_rows > 0) {
                echo '<script type= "text/javascript"> alert ("Username already exists. Try another username.") </script>';
            } else {
                /* create insert query */
                $query = "INSERT INTO `students` ( last_name,first_name,middle_name,name_extension,username,birthdate,sex,email,contact_number,address,guardians_name, relationship_to_student,guardians_contact_number,guardians_address,password) VALUES ('".$lastName."','".$firstName."','".$middleName."', '".$nameExtension."','".$userName."','".$birthDate."','".$sex."','".$email."','".$contactNum."','".$address."','".$gName."','".$relStu."','".$gNumber."', '".$gAddress."', '".$password."')";

                
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