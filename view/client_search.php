<?php
if($_POST['search']==''){
	header("Location: http://localhost/OnlineStore/index.php");
}
else{
header("Location: http://localhost/OnlineStore/controller/search.php?goto=$_POST[search]");
}
?>