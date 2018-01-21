<?php
include_once "../menu/head.txt";
include_once "../menu/nav.txt"; 
?>
<script>
 function validateForm(){
 var mobile=document.forms["myform"]["mobile"].value;

 
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
 
 }
</script>
<br><br><br><br>
<article>
 <form  name="myform" action="../controller/sell.php" method="POST" align="center" onsubmit="return validateForm()">
 <fieldset>
 <legend><h2>APPLY FOR BUSINESS</h2></legend>
 
 <table align="center">
   <tr>
      <td align="left"><b>Your First Name:<b></td>
    </tr>
	<tr>
	  <td align='left'><input type="text" name="fname" required value="<?php echo isset($_SESSION['fname'])?$_SESSION['fname']:''; ?>"></td>
   </tr>
   <tr>
	  <td><br></td>
	</tr>

   <tr>
      <td align="left"><b>Your Last Name:<b></td>
    </tr>
	<tr>
	  <td align='left'><input type="text" name="lname" required value="<?php echo isset($_SESSION['lname'])?$_SESSION['lname']:''; ?>"></td>
   </tr>
   <tr>
	  <td><br></td>
	</tr>
      <tr>
      <td align="left"><b>Mobile Number (Business Number):<b></td>
    </tr>
	<tr>
	  <td align='left'><input type="text" name="mobile" required value="<?php echo isset($_SESSION['mobile'])?$_SESSION['mobile']:''; ?>" ></td>
   </tr>
   <tr>
	  <td><i id="mobileid" style="color:red"></i><br></td>
	</tr>
	
	 <tr>
      <td align="left"><b>Email (Business Email):<b></td>
    </tr>
	<tr>
	  <td align='left'><input type="email" name="email" value="<?php echo isset($_SESSION['email'])?$_SESSION['email']:''; ?>" required></td>
   </tr>
   <tr>
	  <td><br></td>
	</tr>
	
	  <tr>
	   <td align='left'><b>Select A Category You Are Interested:</b></td>
      </tr>	 
 </table>

  <input type='radio' name='category' value='books' style='align:left'> Books Selling<span style='color:white'>---</span><br>
   <input type='radio' name='category' value='figet_spinner' align='left'> Fidget Spinners<br>
		 <input type='radio' name='category' value='tshirt' align='left'> tShirt Business
		 <br><br>
 <p><b><input type="submit" name="submit" value="SubMit Application"></b></p>
 </fieldset>
 </form>
</article>
<br>

<?php
include_once "../menu/foot.txt";
?>