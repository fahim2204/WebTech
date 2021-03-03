<?php 
    include "control/registrationValidation.php"; 
    include "dbConnect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <br><br>
        <form value="Registration" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST"> 
            <table>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name;?>">
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
                        <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email;?>">
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
                        <input type="text" id="username" name="username" placeholder="User Name" value="<?php echo $userName;?>">
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
                        <?php echo $ValidateAllField; 
                         echo $dbmsg; ?>
                    </td>
                </tr>
            </table>
            <a href="login.php">Already Registered?</a>
        </form>
    </body>
</html>
