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
echo "a >= b: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Logika <br>";
echo "a && b: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "a || b: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "!a: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "!b: " . ($hasilNotB ? 'true' : 'false') . "<br><br>";

$a = 10; // Reset nilai a
echo "Hasil Operasi Penugasan Aritmatika:<br>";

$a += $b;
echo "a += b: $a<br>";

$a = 10; // Reset nilai a
$a -= $b;
echo "a -= b: $a<br>";

$a = 10; // Reset nilai a
$a *= $b;
echo "a *= b: $a<br>";

$a = 10; // Reset nilai a
$a /= $b;
echo "a /= b: $a<br>";

$a = 10; // Reset nilai a
$a %= $b;
echo "a %= b: $a<br><br>";

echo "Identik<br>";
$hasilIdentik = $a === $b;
echo "a === b (Identik): " . ($hasilIdentik ? 'true' : 'false') . "<br>";
$hasilTidakIdentik = $a !== $b;
echo "a !== b (Tidak Identik): " . ($hasilTidakIdentik ? 'true' : 'false') . "<br><br>";

$totalKursi = 45;
$kursiDiTempati = 28;
$persenKursiKosong = (($totalKursi - $kursiDiTempati) / $totalKursi) * 100;
echo "Presentasi kursi kosong adalah " . $persenKursiKosong . "%";

?>