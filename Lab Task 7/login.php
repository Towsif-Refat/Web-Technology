
<?php  include('header_footer/header.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="login.css">

    <meta charset="utf-8">
    <title>login</title>


  </head>
  <body><br>
    

    <div  class="loginBox">
  		<img src="image/login.png" class="user" height="120">

  		<h2>Log In Here</h2>
      <h4 align="center"><span style="color:red"><h4>
  			<form  action="" method="POST" id="form" onclick="return Testform()">
          <p>ID</p><input type="text" name="uid" value="" placeholder="Enter ID"  required=""><br>

  				<p>Password</p><input type="password" name="pass" value="" placeholder="Enter Password"  required=""><br><span style="color:red"><br>
  					<select class="type" name="type" >

              <!-- <option>Admin</option> -->
  						<option>Teacher</option>
  						<!-- <option>Student</option> -->
              <!-- <option>Librarian</option> -->
  					</select>
            <table align = "right">
              <tr>
                <td >
                  <input type="checkbox" name="remember"   >
                </td>
                <td  style="color:blue ; font-size:15px">Remember me</td>

              </tr>
            </table>

      <input  type="submit" name="submit" value="Log In">

          <table align = "right">
            <tr>
              <td>
                <a href="forgetpassword.php" target="_blank">forget password</a>
              </td>
            </tr>

          </table>
         

  			</form>

  	</div>
<!-- <?php  include('header_footer/footer.php');?> -->
  </body>
</html>
