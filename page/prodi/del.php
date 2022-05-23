<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //hapus
    $d_prod = mysqli_query($kon, "DELETE FROM prodi WHERE id_prodi = '$id'");

    if ($d_prod) {
        // header("location:index.php?page=prodi");
        echo "<script>window.alert('Data Berhasil Dihapus!!'); location.href='index.php?page=prodi'</script>";
    } else {
        echo "<script>window.alert('Data Gagal Dihapus!!'); location.href='index.php?page=prodi'</script>";

    }

?>