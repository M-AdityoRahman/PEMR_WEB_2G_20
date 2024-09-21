<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$nilaiSiswaTerpilih = array_slice($nilaiSiswa, 2, -2);
$totalNilai = array_sum($nilaiSiswaTerpilih);

echo "Total Nilai Setelah Mengabaikan Dua Nilai Tertinggi dan Terendah:<br>";
echo "Total Nilai: $totalNilai ";
?>