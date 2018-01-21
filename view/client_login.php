<?php 
include_once "../menu/head.txt";
include_once "../menu/nav.txt";
 ?>
<br> <br> <br><br><br><br>
<article>
   <form action="../controller/login.php" method="POST" align="center">
   <fieldset>
   <legend color="green">Please Login to Continue!</legend>
    <table align="center">
	<tr>
	  <td align="left"><b>Enter Mobile Number:</b></td>
	</tr>
	<tr>
	   <td><input type="text" name="mobile" required value="<?php echo isset($_SESSION['mobilelog'])?$_SESSION['mobilelog']:''; ?>"></td>
	</tr>
	
	 <tr>
	    <td><br></td>
	 </tr>
	 
	 <tr>
	    <td align="left"><b>Enter Password:</b></td>
	 </tr>
	  <tr>
	    <td><input type="password" name="pass" required ></td>
	  </tr>
	</table>
	<br>
	 <p><input type="submit" name="submit" value="Validate Login"></p>
	 <br>
	 <i style="color:red" style="align:center"><?php echo isset($_SESSION['err_log'])?$_SESSION['err_log']:''; ?></i>
	 <br>
	 <a href='../view/client_forgot_password.php' style='color: blue' style='align:center'><b><?php echo isset($_SESSION['fpass'])?$_SESSION['fpass']:'';?></b></a>
   </fieldset>
   </form>
   </article>
   <br><br><br><br><br><br>
   <?php
    $_SESSION['mobilelog']="";
	$_SESSION['err_log']="";
	$_SESSION['fpass']="";
	include_once "../menu/foot.txt"; ?>