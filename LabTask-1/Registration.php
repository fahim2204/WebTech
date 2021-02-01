<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration</h1>
        <form value="Registration"> 
            <table>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>User Name:</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" placeholder="User Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" autocomplete="new-password" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Cofirm Password:</label>
                    </td>
                    <td>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</lable>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</lable>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</lable>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date of Birth:</label>
                    </td>
                    <td>
                        <input type="date" id="dob" name="dob">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
        
        </form>
    </body>
</html>