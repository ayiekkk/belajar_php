<?php 

echo "Nama : Mohamad Alief Firmansyah <br>";
echo "Absen : 18 <br><br>";

echo "Perhitungan Gaji Karyawan <br><br>";

define("BONUS", 500000);
define("GAJI", 5000000);
define("PAJAK", 0.12);

$jumlahPerProyek = 3;

$totalPendapatan = GAJI + (BONUS * $jumlahPerProyek);
$totalBersih = $totalPendapatan - ($totalPendapatan * PAJAK);

echo "gaji yang anda dapat Rp. " . number_format(GAJI,0,',','.') ."<br>";
echo "gaji yang anda dapat setelah ditambah dengan bonus projek dengan nilai Rp. ".number_format(BONUS,0,',','.') ." adalah sebesar Rp. " . number_format($totalPendapatan, 0, ',', '.') . "<br>";
echo "gaji bersih anda sebesar Rp. " . number_format($totalBersih, 0, ',', '.');

?>