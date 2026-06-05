<?php

setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian');

$timezone = new DateTimeZone('Asia/Jakarta');
$now = new DateTime('now', $timezone);

$tanggal = strftime('%A, %d %B %Y', $now->getTimestamp());
$waktu = $now->format('H:i:s');

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <nav class="bg-white shadow-md mb-6">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 font-bold text-xl text-blue-600">
                    Produk
                </div>
                <div class="flex space-x-6 text-gray-600 font-medium">
                    <a href="helloworld.php" class="hover:text-blue-600 transition">Utama</a>
                    <a href="datetime.php" class="hover:text-blue-600 transition">Waktu</a>
                    <a href="dataarray.php" class="hover:text-blue-600 transition">Produk</a>
                    <a href="katalog.php" class="hover:text-blue-600 transition">Katalog</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-sm w-full text-center">
        <h1 class="text-xl font-semibold mb-6">Tanggal dan Waktu Sekarang</h1>
        
        <p class="mb-4">
            <span class="font-semibold">Tanggal:</span><br>
            <?= ucfirst($tanggal) ?>
        </p>

        <p>
            <span class="font-semibold">Waktu:</span><br>
            <?= $waktu ?> WIB
        </p>
    </div>
</body>
</html>