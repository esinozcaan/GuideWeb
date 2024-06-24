
	
	<?php
include("d1.php");
$user=$_POST['user'];
$pass=$_POST['pass'];


$ekle=mysqli_query($baglanti,"INSERT INTO $tablo(user,pass) values('$user','$pass')");
 echo '<script>window.location.href = "index.html";</script>'; 
?>

