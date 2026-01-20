<?php
include 'koneksi.php';

// Menangkap data id yang dikirim di url
$id = $_GET['id'];

// Menghapus data dari database
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

// Mengalihkan ke halaman kembali ke index jika sudah berhasil hapus data
header("location:index.php");
?>