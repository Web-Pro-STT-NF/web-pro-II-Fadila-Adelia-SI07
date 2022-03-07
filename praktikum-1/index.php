<?php
//membuat variable user
$name = "Fadila Adelia";
$umur = 18;
$berat = 50.2;

echo "<h1>Nama : " . $name."</h1>";
echo "</br>Umur : $umur";
echo "</br>Berat : $berat";

//membuat variable sistem
echo "</br>Dokumen root : " . $_SERVER['DOCUMENT_ROOT'];
echo "</br>Nama File : " . $_SERVER['PHP_SELF'];

//membuat variable const
define('PHI', 3.14);

$r = 10;
$luas = PHI * $r * $r;
echo "<br/>Luas Lingkaran : $luas";

?>