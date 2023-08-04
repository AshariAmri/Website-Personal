<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function upload() {
    $namaFile = $_FILES['gambar'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;

    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtoLower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    if( $ukuranFile > 1000000 ) {
        echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
            return false;
    }

}
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
            WHERE
    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' 
    ";
return query($query);
}
?>
