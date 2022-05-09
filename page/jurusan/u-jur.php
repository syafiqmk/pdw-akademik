<?php 

    // include koneksi
    include "koneksi.php";

    // get
    $id = $_GET["id"];

    //select
    $s_jur = mysqli_query($kon, "SELECT * FROM jurusan WHERE id_jurusan = '$id'");
    $d_jur = mysqli_fetch_array($s_jur);

    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $u_jur = mysqli_query($kon, "UPDATE jurusan SET nama_jurusan = '$nama' WHERE id_jurusan = '$id'");

        if ($u_jur) {
            header("location:index.php");
        } else {
            echo "<script>window.alert('Edit data gagal')</script>";
        }
    }
?>

<div class="row">
    <h2 class="text-center">Edit Data</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama Jurusan</label>
            <input type="text" name="nama" placeholder="Nama Jurusan" value="<?= $d_jur['nama_jurusan']?>" class="form-control" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>