<?php
$a = 10;
$b = 5;

$hasilTambah = $a  + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$pangkat = $a ** $b;

echo "Aritmatika <br>";
echo "Hasil dari $a + $b = $hasilTambah <br>";
echo "Hasil dari $a - $b = $hasilKurang <br>";
echo "Hasil dari $a * $b = $hasilKali <br>";
echo "Hasil dari $a / $b = $hasilBagi <br>";
echo "Hasil dari $a pangkat $b adalah $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Pembanding <br>";
echo "a == b: " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "a != b: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "a < b: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "a > b: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "a <= b: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "a >= b: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
?>