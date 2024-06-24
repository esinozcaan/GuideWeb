<?php
include("d1.php");

$mesaj = '';

if ($_POST) {
    $GelenUser = $_POST['user'];
    $GelenPass = $_POST['pass'];

    if ($GelenUser != "" && $GelenPass != "") {
        $UserKontrol = $baglanti->prepare("SELECT * FROM t WHERE USER = ? AND PASS = ?");
        $UserKontrol->bind_param("ss", $GelenUser, $GelenPass);
        $UserKontrol->execute();
        $UserKontrolSonuc = $UserKontrol->get_result();
        $UserKontrolSayisi = $UserKontrolSonuc->num_rows;

        if ($UserKontrolSayisi > 0) {
            $mesaj = 'Giriş işlemi başarılı';
            echo '<script>alert("' . $mesaj . '");</script>'; // Giriş işlemi başarılı mesajını göster
            echo '<script>window.location.href = "index.html";</script>'; // Anasayfaya yönlendir
            exit();
        } else {
            $mesaj = 'Kullanıcı adı veya şifre hatalı';
            echo '<script>alert("' . $mesaj . '");</script>'; // Kullanıcı adı veya şifre hatalı mesajını göster
             echo '<script>window.location.href = "deneme1.html";</script>';
        }
    }
}
?>
