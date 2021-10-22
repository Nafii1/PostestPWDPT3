<?php
// Menginclude koneksi.php
include_once("koneksi.php");
// Fungsi untuk menghapus pengguna dengan memanggil variable nim
$nim = $_GET['nim'];
// Menghapus baris pengguna daari tabel bersarkan nim yang diberikan
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");
// Setelah di delete redirect ke halaman awal maka akan muncul daftar pengguna terbaru
header("Location:index.php");
?>