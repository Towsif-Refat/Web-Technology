<?php  include('model.php');?>
<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>
<?php include('controller/GradeController.php');?>

<!DOCTYPE html>
<html>
<head>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 <!--  <style>
      label
      {
        display: inline-block;
        width: 20%;
        padding: 1%; 
      }
     .error
    {
      color: RED;
    }
  </style> -->
  <title>Upload Marks</title>
   
</head>
<body>

 
<fieldset>
    <legend><b>SUBJECTS & RESULTS</b></legend>
  <form action="#" method="POST" name="Submit_Grade" onsubmit=" return GradeVal();">
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>Class</td>
        <td>:</td>
        <td>
          <select name = "class" id="class" onchange="showsubjectcombo(this)">
          <option value="" >Select</option>
          <option value="classsix" >6</option>
          <option value="classseven" >7</option>
          <option value="classeight" >8</option>
          <option value="classnine" >9</option>
          <option value="classten" >10</option>
          </select>
        </td>
        
        <td><div id="classErr"></div></td>
        <td></td>
        
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Subjects</td>
        <td>:</td>
        <td>
        <div id="subject"></div> 
        </td>
        <!-- <td></td> -->
        <td><div id="subjectErr"></div></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Student Id</td>
        <td>:</td>
        <td>
        <div id="sid"></div>
        </td>
        <!-- <td></td> -->
        <td><div id="sidErr"></div></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Midterm Mark</td>
        <td>:</td>
        <td> <input id="Mark1" name="mid" type="number" min="0" max="100" onkeyup="MarkVal()"></td>
        <td><div id="marksErr"></div></td>
        <td>Total Marks:100 Pass Marks:50</td>
           <td><div id="marksErr"></div></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Finalterm Mark</td>
        <td>:</td>
        <td><input id="Mark2" name="final"  type="number" min="0" max="100" onkeyup="MarkVal()"></td>
          <td><div id="marksErr"></div></td>
        <td>Total Marks:100 Pass Marks:50</td>
            
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
    </table>
    <hr/>
    <input type="submit" value="Save">    
  </form>
</fieldset>



<script>
  function MarkVal(){
     var mid = document.getElementById('Mark1').value;
     var final = document.getElementById('Mark2').value;
     if(mid!=""){
        document.getElementById('Mark2').readOnly =true;
     }
     else{
      document.getElementById('Mark2').readOnly =false;
     }
    if(final!=""){
      document.getElementById('Mark1').readOnly =true;
     }
     else{
      document.getElementById('Mark1').readOnly =false;
     }
  }



  function GradeVal(){ 

    var clss=document.Submit_Grade.class.value;
    var mid = document.getElementById('Mark1').value;
    var final = document.getElementById('Mark2').value;
    
    
    

      if (clss==null || clss==""){  
        // alert("Class can't be blank"); 
        document.getElementById("classErr").innerHTML = "Class Must be selected"; 
        document.getElementById("classErr").style.color = "red";
        return false;  
      }

      try{
      var subject=document.Submit_Grade.subject.value;  
    }
    catch{
      document.getElementById("subjectErr").innerHTML = "Subject Must be selected"; 
        document.getElementById("subjectErr").style.color = "red";
        return false;  
    }
    if(mid=="" && final==""){
      document.getElementById("marksErr").innerHTML = "Mark cant be empty"; 
        document.getElementById("marksErr").style.color = "red";

      return false;
    }

      // if (subject==null || subject==""){  
      //   // alert("Class can't be blank"); 
      //   document.getElementById("subjectErr").innerHTML = "Subject Must be selected"; 
      //   document.getElementById("subjectErr").style.color = "red";
      //   return false;  
      // }

     

       try{
      var sid=document.Submit_Grade.sid.value;  
    }
    catch{
      document.getElementById("sidErr").innerHTML = "SID Must be selected"; 
        document.getElementById("sidErr").style.color = "red";
        return false;  
    }

    }


  </script>