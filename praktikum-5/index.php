<?php
include_once "Kucing.php";
include_once "persia.php";

//membuat instance class kucing
$kucing1 = new kucing("garfield", 3, 40);

// panggil atribut dari class kucing
echo "Nama : " . $kucing1->getNama() . "<br/>";
echo "Umur : " . $kucing1->getUmur() . " tahun <br/>";
$kucing1->setEnergi(100);
echo "Energi : " . $kucing1->getEnergi() . "<br/>";

// panggul method dari calss kucing
echo $kucing1->makan() . "<br/>";
echo $kucing1->tidur() . "<br/>";
echo $kucing1->lari() . "<br/>";

echo "Energi sekarang : " . $kucing1->getEnergi();

// membuat instance dari class persia
$persia1 = new Persia("Bolang", "Orange", 140);

echo "Nama : " . $persia1->makan . "<br/>";
echo "warna : " . $persia1->warna . "<br/>";
echo "Energi : " . $persia1->energi . "<br/>";

echo $persia1->makan();
?>