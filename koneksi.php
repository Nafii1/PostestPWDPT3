<?php //untuk menghubungkan php ke database
$host = "localhost";
$username = "root";
$password = ""; //untuk menghubungkan ke dalam database"akademik"
$databasename = "akademik";
$con = @mysqli_connect($host, $username, $password, $databasename); //kondisi jika "con" tidak berhasil terhubung maka output atau tampilannya akan eror
if (!$con) { 
    echo "Error: " . mysqli_connect_error();
    exit(); // lalu exit maka dia tidak akan mengeksekusi kodingan/program php yang berikutnnya
}
else 
    echo "Koneksi ke database terhubung";
//coment untuk uji testing apakah koneksi php database terhubung atau tidak