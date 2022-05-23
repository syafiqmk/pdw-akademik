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
                        OR prodi.nama_prodi LIKE '%$kata%')";
    }
    $s_maha = mysqli_query($kon, $q_s_maha);

?>

<div class="row">
    <h2 class="text-center">Data Mahasiswa</h2>

    <a href="index.php?page=c-maha" class="btn btn-primary mb-3"><i class="fa-solid fa-pencil"></i> Tambah Data</a>

    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" name="kata" placeholder="Search" autocomplete="off" class="form-control">
            <button type="submit" name="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
        </div>
    </form>

    <table class="table light bg-light">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <!-- <th>Jenis Kelamin</th> -->
            <th>Prodi</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                while ($d_maha = mysqli_fetch_array($s_maha)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d_maha['nim'] ?></td>
                        <td><?= $d_maha['nama'] ?></td>
                        <!-- <td> -->
                            <?php 
                                // switch ($d_maha['kelamin']) {
                                //     case '1':
                                //         echo "Laki-laki";
                                //         break;

                                //     case '2':
                                //         echo "Perempuan";
                                //         break;
                                    
                                //     default:
                                //         # code...
                                //         break;
                                // }
                            ?>
                        <!-- </td> -->
                        <td><?= $d_maha['nama_prodi'] ?></td>
                        <td>
                            <a href="index.php?page=d-maha&id=<?= $d_maha['nim']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Hapus</a>
                            <a href="index.php?page=u-maha&id=<?= $d_maha['nim']?>" class="btn btn-primary"><i class="fa-solid fa-wrench"></i> Edit</a>
                            <a href="index.php?page=det-maha&id=<?= $d_maha['nim']?>" class="btn btn-success"><i class="fa-solid fa-list"></i> Detail</a>
                        </td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>