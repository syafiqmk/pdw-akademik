<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //select
    $s_jur = mysqli_query($kon, "SELECT * FROM jurusan");
    $s_prod = mysqli_query($kon, "SELECT * FROM prodi WHERE id_prodi = '$id'");
    $d_prod = mysqli_fetch_array($s_prod);

    //proses update
    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $jur = $_POST["jurusan"];

        $u_prod = mysqli_query($kon, "UPDATE prodi SET nama_prodi = '$nama', id_jurusan = '$jur' WHERE id_prodi = '$id'") ;
        if ($u_prod) {
            header("location:index.php?page=prodi");
        } else {
            echo "<script>window.alert('Edit data gagal!!')</script>";
        }
    }
?>

<div class="row">
    <h2>Edit Data</h2>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="input-label">Nama Prodi</label>
            <input name="nama" type="text" placeholder="Nama Prodi" autocomplete="off" required value="<?= $d_prod['nama_prodi']?>" class="form-control">
        </div>
        <div class="mb-3">
            <select name="jurusan" id="" class="form-select">
                <?php while ($d_jur = mysqli_fetch_array($s_jur)) { ?>
                    <option value="<?= $d_jur['id_jurusan']?>" <?php if ($d_prod['id_jurusan'] == $d_jur['id_jurusan']) {echo "selected";} ?>>
                        <?= $d_jur['nama_jurusan'] ?>
                    </option>
                <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>