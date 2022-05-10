<?php 
    // include koneksi
    include "koneksi.php";

    // select data jurusan
    $s_jur = mysqli_query($kon, "SELECT * FROM jurusan");

    // search
    if (isset($_POST['submit'])) {
        $kata = $_POST["kata"];
        $s_jur = mysqli_query($kon, "SELECT * FROM jurusan WHERE nama_jurusan LIKE '%$kata%' ");
    }

    // check hapus
    if (isset($_POST['hapus'])) {
        $id = $_POST['hapus'];
        
        $s_prod = mysqli_query($kon, "SELECT * FROM prodi WHERE id_jurusan = '$id'");
        $row = mysqli_num_rows($s_prod);

        if ($row >= 1) {
            echo "<script>window.alert('Jurusan memiliki data di Prodi. Data Jurusan tidak bisa dihapus!')</script>";
        } else {
            header("location:index.php?page=d-jur&id=$id");
        }

    }
?>

<div class="row">
    <h2 class="text-center">Data Jurusan</h2>

    <a href="index.php?page=c-jur" class="btn btn-primary mb-3">Tambah Data</a>

    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" name="kata" class="form-control" placeholder="Search" autocomplete="off">
            <button type="submit" name="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table light bg-light mb-3">
        <thead>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                while ($d_jur = mysqli_fetch_array($s_jur)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d_jur['nama_jurusan'] ?></td>
                        <td class="d-flex">
                            <!-- <a href="index.php?page=d-jur&id= //$d_jur['id_jurusan']" class="btn btn-danger">Hapus</a> -->
                            <form action="" method="post">
                                <button type="submit" name="hapus" value="<?= $d_jur['id_jurusan']?>" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="index.php?page=u-jur&id=<?= $d_jur['id_jurusan']?>" class="btn btn-primary ms-1">Edit</a>
                        </td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>