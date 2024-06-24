<?php
$host="localhost";
$kullanici="root";
$sifre="";
$veritabani="web";
$tablo="t";
$baglanti=mysqli_connect($host,$kullanici,$sifre);
if($baglanti)
{

}
else
{

}
@mysqli_select_db($baglanti,$veritabani) or die("Veritabanına bağlanmadı");
?>