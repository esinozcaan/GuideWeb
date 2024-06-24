<?php
$host="localhost";
$kullanici="root";
$sifre="";
$veritabani="web";
$tablo="bilgi";
$baglanti=mysqli_connect($host,$kullanici,$sifre);
if($baglanti)
@mysqli_select_db($baglanti,$veritabani) or die("Veritabanına bağlanmadı");
?>