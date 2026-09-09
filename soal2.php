<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Slip Gaji & Keamanan Data</title>
</head>
<body>
    <?php
$input_nama = "Begi Ganteng Sekali";
$input_rekening = "123456789";
$gaji_kotor = 50000000;

$nama_rapi = ucwords(strtolower($input_nama));
$rekening_sensor = "******" . substr($input_rekening, -4);
$gaji_bersih = $gaji_kotor - ($gaji_kotor * 0.10);

echo "Nama Karyawan: " . $nama_rapi . "<br>";
echo "Nomor Rekening: " . $rekening_sensor . "<br>";
echo "Gaji Bersih (Setelah Pajak 10%): Rp " . number_format($gaji_bersih, 0, ',', '.') . "<br>";
?>
</body>
</html>