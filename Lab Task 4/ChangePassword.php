<?php include "HeaderL.php"; ?>
<?php include "Sidebar.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    
</head>
<style >
        .error
        {
            color: red;
        }
        .npass
        {
            color: green;
        }
        .rnpass
        {
            color: red;
        }
    </style>
<body>
</body>
</html>

<?php

    $pass = $npass = $cnpass = "";
    $epass = $enpass = $ecnpass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["pass"]) && empty($_POST["npass"]) && empty($_POST["cnpass"]))
        {
            $epass = "Plese Enter Your Password";
            $enpass = "Please Enter Your New password";
            $ecnpass = "Please confirm Your New Password";
        }
        else
        {
            $pass = test_input($_POST["pass"]);
            $npass = test_input($_POST["npass"]);
            $cnpass = test_input($_POST["cnpass"]);

            if (strlen($_POST["pass"]) <= 7) 
            {
                $epass = "Your Password Must Contain At Least 8 Characters";
            }
            else if(!preg_match('/[$%@#]/', $pass))
            {
                $epass = "Your Password Must Contain At Least one special character(@,#,$,%)";
            }

            if($pass == $npass)
            {
                $enpass = "Password & New Password cannot be same";
            }
            if($npass != $cnpass)
            {
                $ecnpass = "New password & Retype Password must be same";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form method="POST">
        <table>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass" value="<?php echo $pass;?>" >
                <span class="error"><?php echo $epass;?></span><br></td>
            </tr>

            <tr>
                <td><span style="color: green">New Password</span></td>
                <td>:</td>
                <td><input type="password" name="npass" value="<?php echo $npass;?>" >
                <span class="error"><?php echo $enpass;?></span><br>
            </tr>

            <tr>
                <td><span class="error">Retype New Password</span></td>
                <td>:</td>
                <td><input type="password" name="cnpass" value="<?php echo $cnpass;?>" >
                <span class="error"><?php echo $ecnpass;?></span><br>
            </tr>

        </table>
        <hr/>
        <input type="submit" name="submit" value="Submit" >
        
    </form>
</fieldset>
    </form>


