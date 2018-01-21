<?php 
include_once "../menu/head.txt";
include_once "../menu/nav.txt";
$_SESSION['mssg']="we will send an OTP for verification, <span style='color:blue'>after submit press back button</span>";
 ?>
<br> <br> <br><br><br><br>
<article>
   
  <form action="../controller/forgot_pass.php" method="POST" align='center'>
   <fieldset>
   <legend>Resetting Password</legend>
   
  <br>
  <?php
    if(isset($_SESSION['otp']) && $_SESSION['otp']!=""){
	}else{
		?>
   Enter Your Mobile Number:<br><br>
   <input type="number" name="mobile" size="40" required>
   <br>
   <br>
   <?php
	}
      if(isset($_SESSION['otp']) && $_SESSION['otp']!=""){
		  echo "Enter OPT:<br><br><input type='text' name='otp' required><br><br>";
	  }else{
	  }
     ?>
   <br>
   <input type="submit" value="Submit" name="submit">
   <br><br>
   <i style='color:red'><?php echo isset($_SESSION['otp_mssg'])?$_SESSION['otp_mssg']:$_SESSION['mssg']; ?></i>
   <br>
   </fieldset>
     </form>
   </article>
   <br> <br> <br><br><br><br>
   <?php include_once "../menu/foot.txt"; ?>