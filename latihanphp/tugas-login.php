<?php
$username = '';
$password = '';
$eror = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = "username atau password tidak boleh kosong";
    } elseif ($username ==="admin" && $password ==="12345") {
        $sukses ="login berhasil";
    } else {
        $error = "username atau password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<nav class="bg-white shadow-md mb-6">
            <div class="max-w-4xl mx-auto px-4">
                <div class="flex justify-between items-center h-16">
                    <div class="flex-shrink-0 font-bold text-xl text-blue-600">
            Tugas Login
        </div>
        <div class="flex space-x-6 text-gray-600 font-medium">
            <a href="helloworld.php" class="hover:text-blue-600 transition">Utama</a>
            <a href="datetime.php" class="hover:text-blue-600 transition">Waktu</a>
            <a href="dataarray.php" class="hover:text-blue-600 transition">Produk</a>
            <a href="katalog.php" class="hover:text-blue-600 transition">Katalog</a>
            <a href="tugas-login.php" class="text-blue-600 transition">Tugas Login</a>
        </div>
    </nav>
    <main class="flex-1 flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-sm w-full">
    <h1 class="text-xl font-semibold text-center mb-6">Login</h1>
    <?php if (!empty($error)): ?>
    <p class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
        <?= htmlspecialchars($error) ?>
    </p>
    <?php endif; ?>
    <?php if (!empty($sukses)): ?>
    <p class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-sm">
        <?= htmlspecialchars($sukses) ?>
    </p>
    <?php endif; ?>
     <form method="POST">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Username</label>
                <input
                    type="text"
                    name="username"
                    value="<?= htmlspecialchars($username) ?>"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan username">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Password</label>
                <input
                    type="password"
                    name="password"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan password">
            </div>
            <div class="flex items-center mb-6">
                <input
                type="checkbox"
                id="remember_me"
                name="remember_me"
                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                 <label for="remember_me" class="ml-2 text-sm text-gray-600 select-none">Remember me</label>
            </div>
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>