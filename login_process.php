<?php
// Koneksi ke database (sesuaikan dengan database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "pweb";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mendapatkan data user dari database
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Memeriksa password
    if (password_verify($password, $user['password'])) {
        header("Location: index.php");
        exit(); // Pastikan untuk keluar setelah menggunakan header redirect
    } else {
        echo "Password salah. Silakan coba lagi.";
    }
} else {
    echo "Username tidak ditemukan. Silakan coba lagi.";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>

