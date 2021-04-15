<?php include "model.php"; ?>
<?php include "controller/HeaderL.php"; ?>
<?php include "controller/ChangePasswordController.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    
</head>
<style >
        .error {color: #FF0000;}
</style>
<body></body>
</html>

<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <div id='errmsg' style="color: red;"></div>
    <h3 style="color: red"><?php  echo $msg ?></h3>
   <form method="POST" name="ChangepassForm" onsubmit=" return Change_pass_validation();">
    <!-- <form method="POST" name="ChangepassForm" onsubmit="event.preventDefault();  Change_pass_validation();"> -->
        <table>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass" value="" >
                <span class="error"><?php echo $epass;?></span><br></td>
            </tr>

            <tr>
                <td><span style="color: green">New Password</span></td>
                <td>:</td>
                <td><input type="password" name="npass" value="" >
                <span class="error"><?php echo $enpass;?></span><br>
            </tr>

            <tr>
                <td><span class="error">Retype New Password</span></td>
                <td>:</td>
                <td><input type="password" name="cnpass" value="" >
                <span class="error"><?php echo $ecnpass;?></span><br>
            </tr>

        </table>
        <hr/>
        <input type="submit" name="submit" value="Submit" >
        
    </form>
</fieldset>
    </form>
   

   <script type="text/javascript">
  function Change_pass_validation(){
    var regx=/[$%@#]/;
    // ChangepassForm

     var pass =  document.ChangepassForm.pass.value;
      var npass =  document.ChangepassForm.npass.value;
      var cnpass =  document.ChangepassForm.cnpass.value;
    // console.log(pass.length);
    
   

    if(pass==''){
      document.getElementById("errmsg").innerHTML = " Password can't be blank";

      return false;
    }
    // else if(!regx.test(pass)){
     
    //     document.getElementById("errmsg").innerHTML = "Password must contain 1 special character";
    //    return false;
    // }
    // else if(pass.length<8){
    //   document.getElementById("errmsg").innerHTML = "Password must contain at least 8 character";
    //    return false;
    // }

    if(npass==''){
      document.getElementById("errmsg").innerHTML = " New Password can't be blank";

      return false;
    }
    else if(!regx.test(npass)){
     
        document.getElementById("errmsg").innerHTML = "New Password must contain 1 special character";
       return false;
    }
    else if(npass.length<8){
      document.getElementById("errmsg").innerHTML = "New Password must contain at least 8 character";
       return false;
    }

    if(cnpass==''){
      document.getElementById("errmsg").innerHTML = "Confirm new Password can't be blank";

      return false;
    }
    else if(!regx.test(cnpass)){
     
        document.getElementById("errmsg").innerHTML = "Confirm new Password must contain 1 special character";
       return false;
    }
    else if(cnpass.length<8){
      document.getElementById("errmsg").innerHTML = "Confirm new Password must contain at least 8 character";
       return false;
    }
    if(npass != cnpass)
      {
        
        document.getElementById("errmsg").innerHTML = "Passwords Must be Same!!";
        return false;
      }
    
    
    return true;
  }

</script>

</body>
</html>