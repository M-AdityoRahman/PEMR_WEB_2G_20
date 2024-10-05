<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-3.7.1.js"></script>
        <script>
             $(document).ready(function () {
                $("#flip").click(function () {
                    $("#database").slideToggle("slow");
                });
            });
        </script>
    </head>
    <body>
    <h1>Data Siswa</h1>
        <div id="flip">Click to show Database!</div>
        <div id="database">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php
                $dataSiswa = [
                    [
                        'nama' => 'Andi',
                        'umur' => 15,
                        'kelas' => '10A',
                        'alamat' => 'Malang',
                    ],
                    [
                        'nama' => 'Siti',
                        'umur' => 16,
                        'kelas' => '10B',
                        'alamat' => 'Batu',
                    ],
                    [
                        'nama' => 'Budi',
                        'umur' => 15,
                        'kelas' => '10A',
                        'alamat' => 'Dinoyo',
                    ],
                    [
                        'nama' => 'Anton',
                        'umur' => 25,
                        'kelas' => '15A',
                        'alamat' => 'Dinoyo',
                    ],
                ];

                function tampildata($dataSiswa)
                {
                    foreach ($dataSiswa as $data) {
                        echo "<tr>";
                        echo "<td>{$data['nama']}</td>";
                        echo "<td>{$data['umur']}</td>";
                        echo "<td>{$data['kelas']}</td>";
                        echo "<td>{$data['alamat']}</td>";
                        echo "</tr>";
                    }
                }

                function rataUmur($dataSiswa)
                {
                    $rataRata = 0;
                    foreach ($dataSiswa as $data) {
                        $rataRata += $data['umur'];
                    }
                    $rataRata /= count($dataSiswa);
                    return $rataRata;
                }
                tampildata($dataSiswa);
                ?>
            </table>
            <h2 class='rata'>Rata-rata Umur Siswa : <span class='age'><?php echo rataUmur($dataSiswa); ?></span> tahun</h2>
        </div>
    </body>
</html>
