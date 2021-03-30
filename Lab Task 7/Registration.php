<?php  include('header_footer/HeaderM.php');?>


<!DOCTYPE html>
 <html>
   <head>
    <head>
    <link rel="stylesheet" type="text/css" href="registration-form.css"/>
    <style>
    </style>
    </head>
 <body>

  <form method="post">
    <fieldset>
   

    <legend> <h1 class="form_title">Teacher Registration Form</h1></legend> 
  <div id="container">
	  <div id="container_body">
	 <form name="Registerform" action="Teacher_reg_check.php" method="POST" enctype="multipart/form-data" >
		<div id="errorBox"></div>
		  
		<table width="100%" cellpadding="0" cellspacing="0">


		     <tr>
				<td>User ID</td>
				<td>:</td>
				<td> <div id="comman"><input type="text" name="uid" value="" placeholder="User ID"  class="input_text">   </div>      
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td> <div id="comman"><input type="text" name="Name" value="" placeholder="Full Name"  class="input_text">   </div>      
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					 <div id="comman">
					<input type="text" name="Email" value=""  placeholder="Example@gmail.com" class="input_text">
					</div>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Father's Name</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="fname" value="" placeholder="Full Name"  class="input_text">        
		  </div></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Mother's Name</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="mname" value="" placeholder="Full Name"  class="input_text">        
		  </div></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Present Address</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="address" value=""  placeholder="Only Characters Value " class="input_text">
		  </div></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><div id="comman">
			<input type="password" name="Password" value=""  placeholder="New Password" class="input_text">
		      </div></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="password" name="re_Password" value=""  placeholder="Retype Password" class="input_text">
		  </div></td>
				<td></td>
			</tr>	
		
					

 	    <tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input name="myfile" type="file"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
					<legend>Gender</legend> 
					<div id="radio_button">
		    <input type="radio" name="radiobutton" value="male">
			<label >Male</label>
			&nbsp;&nbsp;
			<input type="radio" name="radiobutton" value="female">
			<label >Female</label>   
			&nbsp;&nbsp;
			<input type="radio" name="radiobutton" value="others">
			<label >Others</label>  			
			
		  </div>
		 	</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			</fieldset>
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="date" name="date" />
					</fieldset>
				</td>
				<td></td>
			</tr>
			
		</table>
		<hr/>
		<div>
			<input type="submit" name="submit" value="Reset" id="reSet" onClick="return Submit1();">
			
			<input type="submit" name="submit" value="Sign Up" id="sign_user1" onClick="return Submit();">
		  </div>
		  <br>
		 <center>Already Register? <a href="Login.php">Login Here</a></center>
		 </form>
		</div>
	  </div>
	</body>
	
