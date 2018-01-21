<?php
include_once "../menu/head.txt";
include_once "../menu/nav.txt"; 
?>
<script>
 function validateForm(){
 var mobile=document.forms["myform"]["mobile"].value;
 var pass=document.forms["myform"]["pass"].value;
 var cpass=document.forms["myform"]["cpass"].value;
 
 if(mobile.length<10 || mobile.length>10){
	 document.getElementById("mobileid").innerHTML="! Enter 10 digit Number";
	 return false;
 }else{
     document.getElementById("mobileid").innerHTML=""; 
 }
 if(isNaN(mobile)){
	 document.getElementById("mobileid").innerHTML="! Not a Valid Number";
	 return false;
 }else{
	 document.getElementById("mobileid").innerHTML="";
 }
 if(pass.length<6 || pass.length>15){
	 document.getElementById("passid").innerHTML="! Must be 6 character long";
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
<br><br><br><br>
<article>
 <form  name="myform" action="../controller/register.php" method="POST" align="center" onsubmit="return validateForm()">
 <fieldset>
 <legend><h2>Create Account</h2></legend>
 
 <table align="center">
   <tr>
      <td align="left"><b>Your First Name:<b></td>
    </tr>
	<tr>
	  <td><input type="text" name="fname" required value="<?php echo isset($_SESSION['fname'])?$_SESSION['fname']:''; ?>"></td>
   </tr>
   <tr>
	  <td><br></td>
	</tr>

   <tr>
      <td align="left"><b>Your Last Name:<b></td>
    </tr>
	<tr>
	  <td><input type="text" name="lname" required value="<?php echo isset($_SESSION['lname'])?$_SESSION['lname']:''; ?>"></td>
   </tr>
   <tr>
	  <td><br></td>
	</tr>
   <tr>
      <td align="left"><b>Mobile Number:<b></td>
    </tr>
	<tr>
	  <td><input type="text" name="mobile" required value="<?php echo isset($_SESSION['mobile'])?$_SESSION['mobile']:''; ?>" ></td>
   </tr>
   <tr>
	  <td><i id="mobileid" style="color:red"></i><br></td>
	</tr>
	
	 <tr>
      <td align="left"><b>Email (Optional):<b></td>
    </tr>
	<tr>
	  <td><input type="email" name="email" value="<?php echo isset($_SESSION['email'])?$_SESSION['email']:''; ?>"></td>
   </tr>
   <tr>
	  <td><br></td>
	</tr>
	
   <tr>
      <td align="left"><b>Password:<b></td>
    </tr>
	<tr>
	  <td><input type="password" name="pass" required></td>
   </tr>
   <tr>
	  <td><i id="passid" style="color:red"></i><br></td>
	</tr>
   <tr>
      <td align="left"><b>Confirm Password:<b></td>
    </tr>
	<tr>
	  <td><input type="password" name="cpass" required></td>
   </tr>
    <tr>
	  <td><i id="cpassid" style="color:red"></i></td>
	</tr>
 </table>
 <br>
 <p><input type="submit" name="submit" value="Continue"></p>
 <i style="color:red" style="align:center"><?php echo isset($_SESSION['err_reg'])?$_SESSION['err_reg']:''; ?></i>
 </fieldset>
 </form>
</article>
<br>

<?php
include_once "../menu/foot.txt";
?>