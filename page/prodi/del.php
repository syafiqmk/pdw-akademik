<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //hapus
    $d_prod = mysqli_query($kon, "DELETE FROM prodi WHERE id_prodi = '$id'");

    if ($d_prod) {
        header("location:index.php?page=prodi");
    }

?>