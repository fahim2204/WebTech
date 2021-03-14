<?php  
            
    $eid = $name = $email = $state = $country = $phone = $address = "";
    $ValidateAllField = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
    {
        $eid = $_REQUEST["eid"];
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $state = $_REQUEST["state"];
        $country = $_REQUEST["country"];
        $address = $_REQUEST["address"];
        $phone = $_REQUEST["phone"];

        if(empty($name) || empty($eid) || empty($state) || empty($country) || empty($email) || empty($address) || empty($phone))
        {
            $ValidateAllField = "Please Fill All The Fields!!";
        }else{
            
            include_once("saveRegistrationData.php");
            $eid = $name = $email = $state = $country = $phone = $address = "";
            unset($_post);
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <br><br>
        <center>
            <h1>Employee Registration Form</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST"> 
                <label>Employee ID:</label><br>
                <input type="text" id="eid" name="eid" placeholder="Name" value="<?php echo $eid;?>"><br>
            
                <label>Employee Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name;?>"><br>
            
                <label>Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email;?>"><br>
            
                <label>Date of Birth:</label><br>
                <input type="date" id="dob" name="dob"><br>
                
                <label>Address:</label><br>
                <input type="text" id="address" name="address" placeholder="Address" value="<?php echo $address;?>"><br>
            
                <label>State:</label><br>
                <input type="text" id="state" name="state" placeholder="State" value="<?php echo $state;?>"><br>
                
                <label>Country:</label><br>
                <input type="text" id="country" name="country" placeholder="Country" value="<?php echo $country;?>"><br>

                <label>Phone:</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Phone" value="<?php echo $phone;?>"><br><br>
            
                <?php echo $ValidateAllField; ?><br><br>

                <input type="submit" name="submit" id="submit" value="Submit"><br><br>

                <a href="SavedRecord.php">View All</a>
            
            </form>
        </center> 
    </body>
</html>
