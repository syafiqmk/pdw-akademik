<?php 
    // include koneksi
    include "koneksi.php";

    // select data jurusan
    $s_jur = mysqli_query($kon, "SELECT * FROM jurusan");

    // search

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
                        <td>
                            <a href="index.php?page=d-jur&id=<?= $d_jur['id_jurusan']?>" class="btn btn-danger">Hapus</a>
                            <a href="index.php?page=u-jur&id=<?= $d_jur['id_jurusan']?>" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>