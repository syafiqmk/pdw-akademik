<?php 
    // include koneksi
    include "koneksi.php";

    //select jurusan
    $s_jur = mysqli_query($kon, "SELECT * FROM jurusan");

    //proses input 
    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $id = $_POST["jurusan"];

        $i_prod = mysqli_query($kon, "INSERT INTO prodi VALUES ('', '$nama', '$id')");
        if ($i_prod) {
            header("location:index.php?page=prodi");
        } else {
            echo "<script>window.alert('Tambah data gagal!!')</script>";
        }
    }
?>

<div class="row">

    <h2 class="text-center">Tambah Data</h2>

    <form action="" method="post" class="input-form">
        <div class="mb-3">
            <label for="" class="input-label">Nama Prodi</label>
            <input type="text" name="nama" placeholder="Nama Prodi" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Jurusan</label>
            <select name="jurusan" id="" class="form-select">
                <?php 
                    while ($d_jur = mysqli_fetch_array($s_jur)) { ?>
                        <option value="<?= $d_jur['id_jurusan']?>"><?= $d_jur['nama_jurusan'] ?></option>
                <?php }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>