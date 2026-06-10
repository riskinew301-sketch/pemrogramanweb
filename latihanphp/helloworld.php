<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>    
<body>
     <nav class="bg-white shadow-md mb-6">
        <div class="max-w-4xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 font-bold text-xl text-blue-600">
                    Utama
                </div>
                <div class="flex space-x-6 text-gray-600 font-medium">
                    <a href="helloworld.php" class="text-blue-600 transition">Utama</a>
                    <a href="datetime.php" class="hover:text-blue-600 transition">Waktu</a>
                    <a href="dataarray.php" class="hover:text-blue-600 transition">Produk</a>
                    <a href="katalog.php" class="hover:text-blue-600 transition">Katalog</a>
                    <a href="tugas-login.php" class="hover:text-blue-600 transition">Tugas Login</a>
                </div>
            </div>
        </div>
    </nav>
    <h1>
        <?php
        echo "Hello, World!";
        ?>
    </h1>
</body>    
</html>
