<?php 

//koneksi ke dbms
$conn = mysqli_connect("localhost", "root", "", "tubes2023");

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
    //ambil data dari tiap elemen dalam form
    $id = 1;
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $gambar = $_POST["gambar"];

    //query insert data
    $query ="INSERT INTO berita
                VALUES
                ('$id', '$judul', '$deskripsi', '$gambar')
                ";
   mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Berita</title>
</head>
<body>
    <h1>Tambah Data Berita</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="judul"></label>
                <input type="text" placeholder="Judul" name="judul" id="judul">
            </li>
            <li>
                <label for="deskripsi"></label>
                <input type="text" placeholder="Deskripsi" name="deskripsi" id="deskripsi">
            </li>
            <li>
                <label for="gambar"></label>
                <input type="text" placeholder="Gambar" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>