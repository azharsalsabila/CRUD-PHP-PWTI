<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $ketersediaan = $_POST['ketersediaan'];

    $sql = "INSERT INTO makanan (nama, harga, ketersediaan) VALUE ('$nama', '$harga', '$ketersediaan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-makanan.php?status=sukses');
    } else {
        header('Location: list-makanan.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>