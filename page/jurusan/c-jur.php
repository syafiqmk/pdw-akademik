<?php 

    // include koneksi
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $i_jur = mysqli_query($kon, "INSERT INTO jurusan VALUES('', '$nama')");

        if ($i_jur) {
            header("location:index.php");
        } else {
            echo "<script>window.alert('Tambah data gagal')</script>";
        }
    }
?>

<div class="row">
    <h2 class="text-center">Tambah Data</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama Jurusan</label>
            <input type="text" name="nama" placeholder="Nama Jurusan" class="form-control" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>