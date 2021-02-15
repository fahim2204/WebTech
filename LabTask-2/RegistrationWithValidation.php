<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
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
        <h1>Registration</h1>
        <form value="Registration" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST"> 
            <table>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Name">
                    </td>
                    <td>
                        <?php echo $validateName; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </td>
                    <td>
                        <?php echo $validateEmail; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>User Name:</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" placeholder="User Name">
                    </td>
                    <td>
                        <?php echo $validateUserName; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" placeholder="Password">
                    </td>
                    <td>
                        <?php echo $validatePassword; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Cofirm Password:</label>
                    </td>
                    <td>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password">
                    </td>
                    <td>
                        <?php echo $validateCPassword; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Favourite Vehicle:
                    </td>
                    <td>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="bike">
                        Bike
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="car">
                        Car
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="boat">
                        Boat
                    <td>
                        <?php echo $validateCheckBox; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="male">Male</lable>
                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="female">Female</lable>
                        <input type="radio" id="gender" name="gender" value="other">
                        <label for="other">Other</lable>
                    </td>
                    <td>
                        <?php echo $validateGender; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date of Birth:</label>
                    </td>
                    <td>
                        <input type="date" id="dob" name="dob">
                    </td>
                    <td>
                        <?php echo $validateDob; ?>
                    </td>
                </tr>
               
                <tr>
                    <td> 
                    </td>
                    <td align="center"> 
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit">
                    </td>
                    <td>
                        <?php echo $ValidateAllField; ?>
                    </td>
                </tr>
            </table>
            <a href="login.php">Already Registered?</a>
        </form>
    </body>
</html>