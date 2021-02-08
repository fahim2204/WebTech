<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 1</title>
    </head>
    <body>
        <p>First Lab work</p>
        <p><b>This is a Bold Text</b></p>
        <img src="aiub.png">
        <a style="font-size:40px; color:red" href="https://portal.aiub.edu"> AIUB</a>
        <br><br>
        <?php 
        $txt  = "Hello World";
        $x = 5;
        $y = 10.5;
        echo "Hey ".$txt."!<br>";
        echo $x+$y;
        ?>
        <form>
            <table>\
                <tr>
                    <td>
                        <label>First Name:</label>
                    </td>
                    <td>
                        <input type="text" id="fname" name="fname" placeholder="First Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Last Name:</label>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname" placeholder="Last Name">
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hobby:</label>
                    </td>
                    <td>
                        <input type="checkbox" id="hobby1" name="hobby1" value="sport">
                        <label for="hobby1">Sport</lable>
                        <input type="checkbox" id="hobby2" name="hobby2" value="game">
                        <label for="hobby2">Game</lable>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact:</label>
                    </td>
                    <td>
                        <input type="text" id="phone" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Address:</label>
                    </td>
                    <td>
                        <input type="textarea" id="address" name="address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT">
                    </td>
                    <td>
                        <input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
        
        </form>
    </body>
</html>