<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //delete
    $d_maha = mysqli_query($kon, "DELETE FROM mahasiswa WHERE nim = '$id'");

    if ($d_maha) {
        // header("location:index.php?page=mahasiswa");
        echo "<script>window.alert('Data Berhasil Dihapus!!'); location.href='index.php?page=mahasiswa'</script>";
    } else {
        echo "<script>window.alert('Data Gagal Dihapus!!'); location.href='index.php?page=mahasiswa'</script>";
    }
?>