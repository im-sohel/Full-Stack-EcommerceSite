<?php
include_once "../menu/head.txt";
include_once "../menu/nav.txt";
?>
<br><br><br><br><br><br><br>
<script>
function validate(){
 var pass=document.forms['myform']['newpass'].value;
 var cpass=document.forms['myform']['cpass'].value;
 if(pass.length<6 || pass.length>15){
 document.getElementById("passid").innerHTML="! Password Length must be between 6-15 characters";
 return false;
 }else{
  document.getElementById("passid").innerHTML="";
 }
 if(pass!=cpass){
   document.getElementById("cpassid").innerHTML="! Password Missmatch";
   return false;
 }else{
   document.getElementById("cpassid").innerHTML="";
 }
 
}
</script>
<h3 style='color:blue' align='center'>Password Reset</h3>
<hr>
<form align='center' name='myform' action='../controller/update_pass.php' onsubmit='return validate()' method="POST">
 <input type='hidden' name='mob' value="<?php echo $_GET['mobile'];?>">
 <b>Enter New Password:</b><br>
 <input type='password' name='newpass' required>
 <br>
 <i style='color:red' id='passid'></i>
 <br><br>
 <b>Confirm Password:</b><br>
 <input type='password' name='cpass' required>
 <br>
  <i style='color:red' id='cpassid'></i>
 <br><br>
 <b><input type='submit' value='RESET PASSWORD' style='color:blue'></b>
</form>


<br><br><br><br><br><br><br>
<?php
include_once "../menu/foot.txt";
?>