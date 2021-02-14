
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <br><br>

        <?php
            $validateName="";
        ?>
       
        <form value="Login" action="<?php $_PHP_SELF ?>" method="post"> 
            <table>
                <tr>
                    <td>
                        <label>User Name:</label>
                    </td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Name">
                        <?php  
                            if(empty($_POST['name']) && $_SERVER["REQUEST_METHOD"]=="POST")
                            {
                                echo "Enter a Name";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT">
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
        
        </form>
    </body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        echo "Name = ".$_GET['name']."<br>";

    }
    
?>
