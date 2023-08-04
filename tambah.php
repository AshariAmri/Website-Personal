<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
if( isset($_POST["submit"]) ) {

    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    $query = "INSERT INTO mahasiswa
                VALUES
            ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>


    <form action="" method="post" enctype="multipart/from-data">
       <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>

       </ul>
            <li>
                
       
    </form>
