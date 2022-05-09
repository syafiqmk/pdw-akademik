<?php 

    // include koneksi
    include "koneksi.php";

    // get
    $id = $_GET["id"];

    $d_jur = mysqli_query($kon, "DELETE FROM jurusan WHERE id_jurusan = '$id'");
    
    if ($d_jur) {
        header("location:index.php");
    }
?>