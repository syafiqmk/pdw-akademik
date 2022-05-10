<?php 
    //include koneksi
    include "koneksi.php";

    //select
    $q_s_maha = "SELECT *
                 FROM mahasiswa JOIN prodi
                 WHERE mahasiswa.id_prodi = prodi.id_prodi";
    if (isset($_POST['submit'])) {
        $kata = $_POST["kata"];
        $q_s_maha = "SELECT *
                     FROM mahasiswa JOIN prodi
                     WHERE mahasiswa.id_prodi = prodi.id_prodi
                     AND (mahasiswa.nim LIKE '%$kata%'
                        OR mahasiswa.nama LIKE '%$kata%'
                        OR mahasiswa.alamat LIKE '%$kata%'
                        OR mahasiswa.no_hp LIKE '%$kata%'
                        OR mahasiswa.email LIKE '%$kata%'
                        OR prodi.nama_prodi LIKE '%$kata%')";
    }
    $s_maha = mysqli_query($kon, $q_s_maha);

?>