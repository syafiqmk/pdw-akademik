<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //select
    $s_maha = mysqli_query($kon, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.id_prodi = prodi.id_prodi AND mahasiswa.nim = '$id'");
    $d_maha = mysqli_fetch_array($s_maha);
?>

<div class="row">
    <h2 class="text-center">Detail Mahasiswa</h2>

    <a href="index.php?page=u-maha&id=<?= $id?>" class="btn btn-primary mb-2"><i class="fa-solid fa-wrench"></i> Edit</a>
    <a href="index.php?page=d-maha&id=<?= $id?>" class="btn btn-danger mb-2"><i class="fa-solid fa-trash-can"></i> Hapus</a>

    <table class="table">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $d_maha['nim'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $d_maha['nama'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?= date("d/M/Y", strtotime($d_maha['tgl_lahir'])) ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $d_maha['alamat'] ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <?php 
                    switch ($d_maha['agama']) {
                        case '1':
                            echo "Islam";
                            break;
                        
                        case '2':
                            echo "Kristen";
                            break;

                        case '3':
                            echo "Katolik";
                            break;

                        case '4':
                            echo "Hindu";
                            break;

                        case '5':
                            echo "Budha";
                            break;

                        case '6':
                            echo "Konghucu";
                            break;
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Kelamin</td>
            <td>:</td>
            <td>
                <?php 
                    switch ($d_maha['kelamin']) {
                        case '1':
                            echo "Laki-laki";
                            break;
                        
                        case '2':
                            echo "Perempuan";
                            break;
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td><?= $d_maha['no_hp'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $d_maha['email'] ?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td><?= $d_maha['nama_prodi'] ?></td>
        </tr>
    </table>
</div>