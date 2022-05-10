<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //delete
    $d_maha = mysqli_query($kon, "DELETE FROM mahasiswa WHERE nim = '$id'");

    if ($d_maha) {
        header("location:index.php?page=mahasiswa");
    }
?>