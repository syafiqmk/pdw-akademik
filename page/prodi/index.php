<?php 
    // include koneksi
    include "koneksi.php";

    // select prodi
    $s_prod = mysqli_query($kon, "SELECT * FROM prodi JOIN jurusan WHERE jurusan.id_jurusan = prodi.id_jurusan");
    //seacrh
    if (isset($_POST['submit'])) {
        $kata = $_POST['kata'];
        $s_prod = mysqli_query($kon, "SELECT * FROM prodi JOIN jurusan WHERE jurusan.id_jurusan = prodi.id_jurusan AND (jurusan.nama_jurusan LIKE '%$kata%' OR prodi.nama_prodi LIKE '%$kata%')");
    }
?>

<div class="row">
    <h2 class="text-center">Data Prodi</h2>
    <a href="index.php?page=c-prod" class="btn btn-primary mb-3">Tambah Data</a>

    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" name="kata" placeholder="Search" autocomplete="off" class="form-control">
            <button type="submit" name="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table light bg-light mb-3">
        <thead>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Nama Jurusan</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                while ($d_prod = mysqli_fetch_array($s_prod)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d_prod['nama_prodi'] ?></td>
                        <td><?= $d_prod['nama_jurusan'] ?></td>
                        <td>
                            <a href="index.php?page=d-prod&id=<?= $d_prod['id_prodi']?>" class="btn btn-danger">Hapus</a>
                            <a href="index.php?page=u-prod&id=<?= $d_prod['id_prodi']?>" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>