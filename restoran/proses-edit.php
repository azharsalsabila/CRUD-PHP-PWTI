<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id_makanan'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $ketersediaan = $_POST['ketersediaan'];

    $sql = "UPDATE makanan SET nama='$nama', harga='$harga', ketersediaan='$ketersediaan' WHERE id_makanan=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-makanan.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>