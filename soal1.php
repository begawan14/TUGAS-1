<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Promo & Kalkulator Diskon</title>
</head>
<body>
    <?php
$harga_barang = 200000;
$kode_promo = 'PROMO30';

$angka_diskon = str_replace("PROMO", "", $kode_promo);
$potongan = $harga_barang * ($angka_diskon / 100);
$harga_final = $harga_barang - $potongan;

echo "Harga Awal: Rp " . number_format($harga_barang, 0, ',', '.') . "<br>";
echo "Potongan ($angka_diskon%): Rp " . number_format($potongan, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($harga_final, 0, ',', '.') . "<br>";
?>
</body>
</html>