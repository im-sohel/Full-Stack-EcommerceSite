<?php
include_once "../menu/head.txt";
include_once "../menu/nav.txt";
include_once "../database/connection.php";

if(!(isset($_SESSION['login'])) && $_SESSION['login']=='')
{
	echo "<script>
    window.location = '../view/client_login.php';
   </script>";
}
 

$pid=$_GET['pid'];
$price=$_GET['price'];
$pname=$_GET['pname'];
$producer=$_GET['producer'];
$qty=$_GET['qty'];

$m=$_SESSION['mobileno'];
$getmob="SELECT * FROM customer WHERE mobile='$m'";
$rs=mysqli_query($con,$getmob);
while($mob=mysqli_fetch_assoc($rs)){
 $mobileno=$mob['mobile'];
}



$q="SELECT pid FROM cart WHERE pid='$pid' AND mobileno='$mobileno'";
$r=mysqli_query($con, $q) or die(mysqli_error($con));
$n=mysqli_num_rows($r);
if($n==0)
{
$query="INSERT INTO cart(pid, pname, price, producer, qty, mobileno) VALUES('$pid', '$pname', '$price', '$producer', '$qty', '$mobileno')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	echo "<br><br><br><br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'> Successfully added to Cart, <a href='../controller/cart.php'><i style='color:red'>Click Here</i></a> to go to your <b style='color:red'><i>CART</i></b> for checkout.</font></p>";
	echo "<br><br><br><br><br><br><br><br>";
}
else{
	echo "<br><br><br><br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'>You have already added this item, <a href='../controller/cart.php'><i style='color:red'>Click Here</i></a> to go to your <b style='color:red'><i>CART</i></b> for checkout.</font></p>";
    echo "<br><br><br><br><br><br><br><br><br>";
	}


include_once "../menu/foot.txt"; 
?>