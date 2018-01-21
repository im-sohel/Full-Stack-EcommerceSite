<?php
		include_once "../database/connection.php";
		$uname=$_POST['login_uname'];
		$uname=htmlspecialchars($uname);
		$pass=$_POST['login_password'];
		$pass=htmlspecialchars($pass);
		$query="SELECT username, password FROM customer WHERE username='$uname' AND password='$pass'";
		$result=mysqli_query($con, $query);
		$num_rows=mysqli_num_rows($result);
		if($num_rows==1)
		{
			session_start();
			$_SESSION['login']=$uname;
			header("Location: http://localhost/OnlineStore/controller/search.php");
		}
	include_once "../menu/head.txt";	
	include_once "../nav.txt";
	include_once "../product_nav.txt";
	
	
	    if($num_rows==0)
		{
			 $_SESSION['login']='';
			 
			 echo "<form action='../controller/login.php' method='POST'>
   <fieldset>
   <legend style='color:green'>Please login to Continue!</legend>
   Username:<br>
   <input type='text' name='login_uname' size='40' placeholder='james007'   required>
   <br>
   <br>
   Password:<br>
   <input type='password' name='login_password' required size='40'>
   <br>
   <br>
   <input type='submit' value='Log In'>
   <br>
   </fieldset>
   </form>";
		   
		   echo "<p style='color:red'><strong>Error:</strong><em>Incorrect Email and Password</em></p>";
		   echo "<h4 style='color:blue'><a href='../view/client_forgot_password.php'>Forgot Password ?</a></h4>";
		  }
?>
<?php
include_once "../menu/foot.txt";
 ?>