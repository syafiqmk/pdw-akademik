<?php 
    //include koneksi
    include "koneksi.php";

    //select prodi
    $s_prod = mysqli_query($kon, "SELECT * FROM prodi");
?>