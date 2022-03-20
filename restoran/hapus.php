<?php

include("config.php");

if( isset($_GET['id_makanan']) ){

    $id_makanan = $_GET['id_makanan'];

    $sql = "DELETE FROM makanan WHERE id_makanan=$id_makanan";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-makanan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>