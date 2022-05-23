<?php 

    // include koneksi
    include "koneksi.php";

    // get
    $id = $_GET["id"];

    $d_jur = mysqli_query($kon, "DELETE FROM jurusan WHERE id_jurusan = '$id'");
    
    if ($d_jur) {
        // header("location:index.php");
        echo "<script>window.alert('Data Berhasil Dihapus!!'); location.href='index.php'</script>";
    } else {
        echo "<script>window.alert('Data Gagal Dihapus!!'); location.href='index.php'</script>";
    }
?>