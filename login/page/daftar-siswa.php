<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    header("location: ../login.html"); // Redirect ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <!-- ... -->

    <!-- Konten Data Siswa -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Siswa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Ganti dengan informasi koneksi database Anda
                                $host = "localhost";
                                $dbUsername = "root";
                                $dbPassword = "";
                                $dbName = "giat-ngoding";

                                // Buat koneksi ke database
                                $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

                                if ($conn->connect_error) {
                                    die("Koneksi gagal: " . $conn->connect_error);
                                }

                                // Query untuk mengambil data siswa
                                $sql = "SELECT * FROM `daftar-siswa`"; // Perhatikan tanda kutip sebelum dan sesudah nama tabel
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        echo "<td>" . $row["nama"] . "</td>";
                                        echo "<td>" . $row["kelas"] . "</td>";
                                        echo "<td>" . $row["alamat"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>Tidak ada data siswa.</td></tr>";
                                }

                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
