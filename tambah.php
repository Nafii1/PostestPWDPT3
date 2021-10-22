<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> //judul untuk menambahan data mahasiswa
</head>

<body>
    <a href="index.php">Go to Home</a> //link untuk kembali kehalaman awal yaitu "index php"
    <br /><br />
    <form action="tambah.php" method="post" name="form1"> //fungsi untuk menambahkan data
        <table width="25%" border="0">
            <tr>
                <td>Nim</td> //from untuk menambah data NIM
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td> //from untuk menambah data Nama
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gender (L/P)</td>//from untuk menambah data Gender
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>Alamat</td> //from untuk menambah data Alamat
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td> //from untuk menambah data Tgl Lahir
                <td><input type="text" placeholder="yy/mm/dd" name="tgllhr"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) { //kondisi jika method post mempunyai submint di set maka akan di eksekusi
        $nim = $_POST['nim'];//mengambil data nim dari method post di atas
        $nama = $_POST['nama'];//mengambil data nama dari method post di atas
        $jkel = $_POST['jkel'];//mengambil data jkel dari method post di atas
        $alamat = $_POST['alamat'];//mengambil data alamat dari method post di atas
        $tgllhr = $_POST['tgllhr'];//mengambil data tgl lhr dari method post di atas
        $semester = $_POST['semester'];
        // //mengambil data semester dari method post di atas
        include_once("koneksi.php"); //menginclude kan koneksi.php
        // fungsi untuk memasukkan data pengguna dalam tabel
        $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr,semester) VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr', '$semester')");//jika data berhasil di masukkan maka akan menampilkan "data berhasil di simpan"
        
        echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    }
    ?>
</body>

</html>