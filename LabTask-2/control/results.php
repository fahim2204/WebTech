<?php  
            $validateCheckBox = "";
            $validateName = "";
            $validateUserName = "";
            $validateEmail = "";
            $validateDob = "";
            $validateGender = "";
            $v1=$v2=$v3= "";
            $validatePassword = "";
            $validateCPassword = "";
            $ValidateAllField = "";

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $name = $_REQUEST["name"];
                $email = $_REQUEST["email"];
                $userName = $_REQUEST["username"];
                $password = $_REQUEST["password"];
                $cpassword = $_REQUEST["cpassword"];

                if(empty($name) || empty($_REQUEST["gender"]) || empty($password) || empty($cpassword) || empty($userName))
                {
                    $ValidateAllField = "Please Fillup All The Field!!";
                }
                if(empty($name) || strlen($name)<4)
                {
                    $validateName = "You must Enter a valid Name";
                }
                if(empty($userName) || strlen($userName)<6 || !preg_match("/^[A-Za-z0-9_~\-!@.#\$%\^&*\(\)]+$/",$userName))
                {
                    $validateUserName = "Please enter Username Correctly";
                }
                if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))
                {
                    $validateEmail = "You must Enter a valid Email";
                }
                
                if(empty($_REQUEST["gender"]))
                {
                    $validateGender = "Please select a gender";
                }
                if(empty($_REQUEST["dob"]))
                {
                    $validateDob = "Please Enter a Date";
                }
                
                if(empty($password) || strlen($password)<8)
                {
                    $validatePassword = "You must Enter a Password";
                }
                if( $password !=  $cpassword)
                {
                    $validateCPassword = "Confirm Password isn't match";
                }
                if(!isset($_REQUEST["vehicle1"]) && !isset($_REQUEST["vehicle2"]) && !isset($_REQUEST["vehicle3"]))
                {
                    $validateCheckBox = "Please select at least one checkbox";
                }
            }

        ?>