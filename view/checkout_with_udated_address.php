<?php
include_once "../menu/head.txt";
include_once "../menu/nav.txt";
?>

<br><br><br><br><br><br>
<script>
  function validateForm(){
  var mobile=document.forms["myforms"]["buyer_mobile"].value;
  var pin=document.forms["myforms"]["pin"].value;
  
    
   
  if(mobile.length>10 || mobile.length<10){
	  document.getElementById("mobid").innerHTML="! Enter 10 digit Number";
	  return false;
  }else{
      document.getElementById("mobid").innerHTML="";
  }

  if(pin.length>6 || pin.length<6){
    document.getElementById("pinid").innerHTML="! Enter 6 digit Pin";
	return false;
  }else{
	  document.getElementById("pinid").innerHTML="";
  }
   if(isNaN(pin)){
	   document.getElementById("pinid").innerHTML="! Not a Valid Pin";
	   return false;
   }else{
	   document.getElementById("pinid").innerHTML="";
	   
   }
   
   if(isNaN(mobile)){
	  document.getElementById("mobid").innerHTML="! Not a Valid Number";
	  return false;
  }else{
	  document.getElementById("mobid").innerHTML="";
  }

  }
</script>
<section>

<p align='center'><font face='verdana' size='5' color='blue'>Please Fill Details to Continue!</font></p>
<hr>
<form name="myforms"  onsubmit="return validateForm()" action="../controller/order.php" method="POST" align="center">

<input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>">
<input type="hidden" name="pname" value="<?php echo $_GET['pname']; ?>">
<input type="hidden" name="price" value="<?php echo $_GET['price']; ?>">
<input type="hidden" name="producer" value="<?php echo $_GET['producer']; ?>">


    <table align='center'>
	  <tr>
	     <td align="left"><b>Contact Person Name:</b></td>
	  </tr>
	   <tr>
	     <td align="left"> <input type="text" name="name" required size="40"></td>
	  </tr>
	  <tr>
	  <td><br></td>
	</tr>
	  <tr>
	     <td align="left"><b>Enter Mobile Number:</b></td>
	  </tr>
	  <tr>
	     <td align="left"> <input type="text" name="buyer_mobile" required size="40"></td>
	  </tr>
	  <tr>
	  <td><i id="mobid" style="color:red"></i><br></td>
	</tr>
	
	  <tr>
	  <td><br></td>
	</tr>
	  <tr>
	     <td align="left"><b>Enter Address:</b></td>
	  </tr>
	  
	  <tr>
	     <td align="left"><input type="text" name="address" required size="40"> </td>
	  </tr>
	  <tr>
	  <td><br></td>
	</tr>
	  <tr>
	     <td align="left"><b>City:</b></td>
	  </tr>
	  
	  <tr>
	     <td align="left"><input type="text" name="city" required size="40"size="40"></td>
	  </tr>
	  <tr>
	  <td><br></td>
	</tr>
	  <tr>
	     <td align="left"><b>Pin:</b> </td>
	  </tr>
	  
	  <tr>
	     <td align="left"><input type="text" name="pin" required size="40"></td>
	  </tr>
	  <tr>
	  <td><i id="pinid" style="color:red"></i><br></td>
	</tr>
	
	  <tr>
	  <td><br></td>
	</tr>
	  <tr>
	     <td align="left"><b>Enter Landmark(Optional):</b></td>
	  </tr>
	  
	  <tr>
	     <td align="left"><input type="text" name="landmark" size="40"></td>
	  </tr> 
     <tr>
	  <td><br></td>
	</tr>
	  <tr>
	     <td align="left"><b>Mode of Payment:</b></td>
	  </tr>
	 
	  <tr>
	     <td align="left"><i><b style="color:red">Cash On Delivery</b></i><td>
	  </tr>
	  
	  <tr>
	    <td align="left">(<small style="color:blue"><i>We are currently serving only by Cash of Delivery.</i></small>)</td>
	  </tr>
	</table>
	<br>
    <p><input type="submit" value="PLACE ORDER"></p>
     </form>
	 </section>



   <?php
   include_once "../menu/foot.txt";
?>   
     
     
     
     