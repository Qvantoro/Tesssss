
<?php
// Koneksi ke database (sesuaikan dengan database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "22sb11a071";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari form register
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Query untuk menyimpan data ke database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Registrasi berhasil. Silakan <a href='login.php'>login</a>.";
} else {
    echo "Registrasi gagal. Silakan coba lagi.";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
