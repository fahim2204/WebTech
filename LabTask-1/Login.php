<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <h1>Login</h1>
        <form value="Login"> 
            <table>
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
                        <input type="checkbox" value="rem">
                        <label for="rem">Remember me<label>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT">
                    </td>
                    <td>
                        <a href="forgetpass.php">Forget Password?</a>
                    </td>
                </tr>
            </table>
            <a href="registration.php">Register Here</a>
        </form>
    </body>
</html>