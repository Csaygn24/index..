<?php
$sunucu="localhost";    
$kullanici="root";
$sifre= "Cemil.s.24!.";
$veritabaniAdi="denemeform";

$baglan=mysqli_connect($sunucu, $kullanici, $sifre, $veritabaniAdi);

if (!$baglan){
    die("veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}
else{
    echo"bağlantı başarılı" ;
}
?>;