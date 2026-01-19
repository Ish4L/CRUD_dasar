<?php
// Koneksi data ke database agar masuk
include 'koneksi.php';

// Menangkap data yang dikirim dari form tambah data
$id         = $_POST['id'];
$nama       = $_POST['nama'];
$kelas      = $_POST['kelas'];
$jurusan    = $_POST['jurusan'];

$query = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// Periksa query apakah ada error
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".
    mysqli_error($koneksi));
    } else {
        // Tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.
        location='index.php';</script>";
    }
?>