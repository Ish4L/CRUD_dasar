<?php
include 'koneksi.php';

// menangkap data yg dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
// mengambil data dari database
$query = mysqli_query($koneksi, $sql);
// Fungsi mysqli_query() menjalankan query SQL di atas menggunakan koneksi yang disimoan dalam variabel $koneksi.
$cek = mysqli_num_rows($query);
// digunakan untuk menghitung jumlah  baris (record) yang dikembalikan oleh query.

if ($cek > 0) {
    header("location:index.php");
} else {
    header("location:login.php?pesan=Gagal");
}
?>