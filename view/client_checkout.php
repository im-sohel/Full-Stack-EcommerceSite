<!DOCTYPE html>
<html>
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/cart.png" type="image/x-icon">
  <meta name="description" content="">
  <title>MyShoppingCart</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/mobirise/css/style.css">
  <link rel="stylesheet" href="../assets/dropdown-menu/style.css">
  <link rel="stylesheet" href="../assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css"> 
  
  
  <style>
 #defid{
    background-color: lightgrey;
    width: 300px;
    border: 1px solid green;
    padding: 25px;
    margin: 25px;
}
#upid{
    background-color: lightgrey;
    width: 300px;
    border: 1px solid green;
    padding: 25px;
    margin: 25px;
}
</style>
  
  </head>

<?php
include_once "../menu/nav.txt";

include_once "../database/connection.php";
$q="SELECT * FROM address WHERE mobile='$_SESSION[mobileno]'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
if($n==1){
while($row=mysqli_fetch_assoc($r)){
	$address=$row['address'];
	$city=$row['city'];
	$pin=$row['pin'];
	$landmark=$row['landmark'];
	$buyer_mobile=$row['buyer_mobile'];
	$name=$row['name'];
}
?>

<br><br><br><br><br>
<div id="defid">
 <p><font face='verdana' size='4' color='blue'>Use Default Address:</font></p>
 <b style='color:blue'>Contact Person:</b> <?php echo $name;?><br>
 <b style='color:blue'>Address:</b> <?php echo $address;?><br>
<b style='color:blue'>City:</b> <?php echo $city; ?><br>
 <b style='color:blue'>Pin:</b> <?php echo $pin; ?><br>
<b style='color:blue'> Mobile No:</b> <?php echo $buyer_mobile; ?><br>
<b style='color:blue'> Landmark: </b><?php echo $landmark;?> 

  <form action="../controller/order.php" method="POST">
  
 <input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>">
<input type="hidden" name="pname" value="<?php echo $_GET['pname']; ?>">
<input type="hidden" name="price" value="<?php echo $_GET['price']; ?>">
<input type="hidden" name="producer" value="<?php echo $_GET['producer']; ?>">

<input type="hidden" name="address" value="<?php echo $address; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">
<input type="hidden" name="pin" value="<?php echo $pin; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="landmark" value="<?php echo $landmark; ?>">
<input type="hidden" name="buyer_mobile" value="<?php echo $buyer_mobile; ?>">
<br>
 <b style="color:red"><input type="submit" value="Proceed Checkout">
  </form>
</div>
<div id="upid">
    <form action="../view/checkout_with_udated_address.php" method="GET">
	
<input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>">
<input type="hidden" name="pname" value="<?php echo $_GET['pname']; ?>">
<input type="hidden" name="price" value="<?php echo $_GET['price']; ?>">
<input type="hidden" name="producer" value="<?php echo $_GET['producer']; ?>">
   <b style="color:red"><input type="submit" value="Update Address"></b> 
  </form>
   </div>

<?php
}else{
  header("Location: ../view/default_address_checkout.php?pid=$_GET[pid]&pname=$_GET[pname]&price=$_GET[price]&producer=$_GET[producer]");
}
?>
<?php
include_once "../menu/foot.txt";
?>



