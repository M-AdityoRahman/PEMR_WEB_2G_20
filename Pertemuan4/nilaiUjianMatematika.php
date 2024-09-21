<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];


$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1]; 
}

$rataRataKelas = $totalNilai / $jumlahSiswa;
echo "<h3>Daftar Siswa dengan Nilai di Atas Rata-rata Kelas</h3>";
echo "Rata-rata Kelas: $rataRataKelas";
echo "<ul>";

foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRataKelas) {
        echo "<li>Nama: {$siswa[0]}, Nilai: {$siswa[1]}</li>";
    }
}

echo "</ul>";
?>
