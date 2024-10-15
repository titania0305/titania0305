<?php
// Soal 1: Penghitung Diskon
function hitungDiskon($jumlahBayar) {
    if ($jumlahBayar >= 500000) {
        return 0.5;
    } elseif ($jumlahBayar >= 100000) {
        return 0.1;
    } elseif ($jumlahBayar >= 50000) {
        return 0.05;
    } else {
        return 0;
    }
}

$jumlahBayar = 600000; // Ganti dengan nilai yang ingin Anda uji
$diskon = hitungDiskon($jumlahBayar);
$totalBayar = $jumlahBayar * (1 - $diskon);

echo "Jumlah Bayar: Rp" . number_format($jumlahBayar) . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total Bayar: Rp" . number_format($totalBayar);

echo"<br>";


// Soal a dan b menggunakan while
echo "Soal a dan b (menggunakan while):<br>";

// Soal a
$angka = 1;
while ($angka <= 16) {
    echo $angka . " ";
    $angka += 5;
}

echo "<br><br>";

// Soal b
$angka = 10;
while ($angka >= 0) {
    echo $angka . " ";
    $angka -= 1;
}

echo "<br><br>";

// Soal c dan d menggunakan do-while
echo "Soal c dan d (menggunakan do-while):<br>";

// Soal c
$angka = 30;
do {
    echo $angka . " ";
    $angka -= 3;
} while ($angka >= 0);

echo "<br><br>";

// Soal d
$angka = 10;
do {
    echo $angka . " ";
    $angka -= 2;
} while ($angka >= 0);
?>
