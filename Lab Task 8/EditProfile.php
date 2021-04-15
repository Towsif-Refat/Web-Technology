<?php include "model.php"; ?>
<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>







<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>

   <style>
       
    
       .error {color: #FF0000;}
    </style>
	
</head>
<body>

<fieldset>
	<?php
		$data=ViewProfile();
		// echo $data['uid'];
	?>
    <legend><b>EDIT PROFILE</b></legend>

<div id="ename" style="color: red;"></div>
	<form method="post" name="Reg_Form"  onsubmit=" return validation();" enctype="multipart/form-data" >
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name :</td>
				<!-- <td>:</td> -->
				<td><input name="name" type="text" value="<?php echo $data["name"];?>">
          <span class="error" id="errname"><?php echo $ename;?></span>

        </td>
        <td></td>
         <td></td>


			</tr>		
      <tr><td colspan="4"><hr/></td></tr>

<tr>
  <td>Image :</td>
  <!-- <td>:</td> -->

     <td  align="" width="300px">
          <img width="128"  src="image/<?php echo $data['picture']; ?>"/>
                   
        </td>

        <td colspan="2"></td>
          
      
</tr>
<!-- <tr><td colspan="4"><hr/></td></tr> -->
<tr>
  <td></td>
        
       <td>
        <input type="file" name="picture">   
        </td>
</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<td>Father Name :</td>
				<td><input name="fname" type="text" value="<?php echo $data["fname"];?>">
          <span class="error" id="errfname"><?php echo $efname;?></span>
        </td>
				
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<td>Mother Name :</td>
				<td><input name="mname" type="text" value="<?php echo $data["mname"];?>">
          <span class="error" id="errmname"><?php echo $emname;?></span>
        </td>
				
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email :</td>
				<!-- <td>:</td> -->
				<td>
					<input name="email" type="text" value="<?php echo $data["email"];?>">
          <span class="error" id="erremail"><?php echo $eemail;?></span>
				</td>
				
				<td></td>
			

			<tr><td colspan="4"><hr/></td></tr>
			<td>Address:</td>
				<!-- <td>:</td> -->
				<td><input name="address" type="text" value="<?php echo $data["address"];?>">
          <span class="error"  id="erraddress"><?php echo $eaddress;?></span>
        </td>
				
				<td></td>
			</tr> 	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender :</td>
				<!-- <td>:</td> -->
				<td>   
					<input name="gender" type="radio" value="Male" <?php if($data["gender"]=='Male') echo "checked"; ?>> Male
					<input name="gender" type="radio" value="Female"<?php if($data["gender"]=='Female') echo "checked"; ?>>Female
					<input name="gender" type="radio" value="Other" <?php if($data["gender"]=='Other') echo "checked"; ?>>Other
          <span class="error" id="gender"><?php echo $egender;?></span>
				</td>
				
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date of Birth :</td>
				<!-- <td valign="top"></td> -->
				<td>
					<input name="dob" max='2000-01-01' type="date" value="<?php echo $data["dob"];?>">
					<br/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
          <span class="error"  id="errdob"><?php echo $edob;?></span>
				</td>
				
				<td><input type="submit" value="Submit">  </td>
			</tr>
		</table>
		<hr/>
		<!-- <input type="submit" value="Submit">		 -->
	</form>
</fieldset>



<script type="text/javascript">
  function countWords(str) {
    return str.trim().split(/\s+/).length;
  }
   
    function validation()
    {
      document.getElementById("errname").innerHTML="";
       // document.getElementById("errfname").innerHTML="";
       //  document.getElementById("errmname").innerHTML="";
       //   document.getElementById("erremail").innerHTML="";
       //   document.getElementById("erraddress").innerHTML="";
       //    document.getElementById("errimg").innerHTML="";
       //     document.getElementById("errgender").innerHTML="";
       //      document.getElementById("errdob").innerHTML="";
     
      var nameRegex = /^[a-zA-Z-' ]*$/;
      // var fnameRegex = /^[a-zA-Z-. ?!]{5,}$/;
      // var mnameRegex = /^[a-zA-Z-. ?!]{5,}$/;
      // var addressRegex = /^[a-zA-Z0-9-., ?!]{6,}$/;
      var addressRegex = /^[A-Za-z]+$/;
      var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
     // var passRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
      var passRegex=/[$%@#]/;
      
      var name = document.Reg_Form.name.value;
      var fname = document.Reg_Form.fname.value;
      var mname = document.Reg_Form.mname.value;
      var address = document.Reg_Form.address.value;
      var email = document.Reg_Form.email.value;
    
      var radiobutton = document.Reg_Form.gender.value;
      var dob = document.Reg_Form.dob.value;
      var image = document.Reg_Form.picture.value;
      // var x = document.Reg_Form.x.value;
        console.log(countWords(name));
      //Name
      if(name == "")
      {
        document.Reg_Form.name.focus();
        document.getElementById("errname").innerHTML = "Name is required, Enter Full Name";
        return false;
      }
      if(!nameRegex.test(name))
      {
        document.Reg_Form.name.focus();
        document.getElementById("errname").innerHTML = "At least two words and can only contain letters,period,dash";
        
        return false;
      }
      if(+countWords(name)<+2){
        document.Reg_Form.name.focus();
        document.getElementById("errname").innerHTML = "Name At least two words and can only contain letters,period,dash";

        
        return false;
      }

       //Father Name
      if(fname == "")
      {
        document.Reg_Form.fname.focus();
        document.getElementById("errfname").innerHTML = "Father Name is required, Enter Full Name";
        return false;
      }
      else if(!nameRegex.test(fname))
      {
        document.Reg_Form.fname.focus();
        document.getElementById("errfname").innerHTML = "At least two words and can only contain letters,period,dash";
        return false;
      }
       if(+countWords(fname)<+2){
        document.Reg_Form.name.focus();
        document.getElementById("errfname").innerHTML = "Father Name At least two words and can only contain letters,period,dash";

        
        return false;
      }
      //Mother Name
      if(mname == "")
      {
        document.Reg_Form.mname.focus();
        document.getElementById("errmname").innerHTML = "Mother Name is required, Enter Full Name";
        return false;
      }
      else if(!nameRegex.test(mname))
      {
        document.Reg_Form.mname.focus();
        document.getElementById("errmname").innerHTML = "At least two words and can only contain letters,period,dash";
        return false;
      }
       if(+countWords(mname)<+2){
        document.Reg_Form.name.focus();
        document.getElementById("errmname").innerHTML = "Mother Name At least two words and can only contain letters,period,dash";

        
        return false;
      }
     
      //Email
      if(email == "")
      {
        document.Reg_Form.email.focus();
        document.getElementById("erremail").innerHTML = "Email is required";
        return false;
      }
      else if(!emailRegex.test(email))
      {
        document.Reg_Form.email.focus();
        document.getElementById("erremail").innerHTML = "Invalid email format. Format: example@something.com";
        return false;
      }
      //Address
      if(address == "")
      {
        document.Reg_Form.address.focus();
        document.getElementById("erraddress").innerHTML = "Address is required!!";
        return false;
      }
      else if(!addressRegex.test(address))
      {
        document.Reg_Form.address.focus();
        document.getElementById("erraddress").innerHTML = "Letter Only";
        return false;
      }
      //Password

     // var pass =  document.getElementById("pass").value;

      
   
    
      //Image
      // if(image == "")
      // {
      //   document.Reg_Form.picture.focus();
      //   document.getElementById("ename").innerHTML = "Select Your Image";
      //   return false;
      // }
      //Gender
      if(document.Reg_Form.gender[0].checked == false && document.Reg_Form.gender[1].checked == false && document.Reg_Form.gender[2].checked == false)
      {
        document.Reg_Form.gender.value;
        document.getElementById("errgender").innerHTML = "Gender must be selected";
        return false;
      }
      //Date Of Birth
      if(dob == "")
      {
        document.Reg_Form.dob.focus();
        document.getElementById("errgender").innerHTML = "Select your Date Of Birth";
        return false;
      }

      
      if(name != '' && mname  != '' && fname  != ''  && email != '' && address != '' && radiobutton != '' && dob !=  '')
      {
        alert( "Submitting Registerform? ");
         return true;
      }

     
    }
  </script>

</body>
</html>