<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ganti dengan informasi koneksi database Anda
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "giat-ngoding"; // Ganti dengan nama database Anda

    // Buat koneksi ke database
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari form login
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk mencari user dengan username dan password yang cocok
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Jika data ditemukan, set session dan redirect ke dashboard (ganti dengan halaman yang sesuai)
        $_SESSION["username"] = $username;
        header("location: dashboard.php"); // Ganti dengan halaman dashboard Anda
    } else {
        // Jika data tidak ditemukan, tampilkan pesan error atau redirect ke halaman login kembali
        echo "Username atau password salah.";
    }

    $conn->close();
}
?>
