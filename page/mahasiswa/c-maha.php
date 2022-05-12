<?php 
    //include koneksi
    include "koneksi.php";

    //select prodi
    $s_prod = mysqli_query($kon, "SELECT * FROM prodi");

    //proses input
    if (isset($_POST['submit'])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $alamat = $_POST["alamat"];
        $agama = $_POST["agama"];
        $kelamin = $_POST["kelamin"];
        $no_hp = $_POST["no_hp"];
        $email = $_POST["email"];
        $prodi = $_POST["prodi"];

        $q_i_maha = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$tgl_lahir', '$alamat', '$agama', '$kelamin', '$no_hp', '$email', '$prodi')";
        $i_maha = mysqli_query($kon, $q_i_maha);

        if ($i_maha) {
            header("location:index.php?page=mahasiswa");
        } else {
            echo "<script>window.alert('Tambah data gagal!!')</script>";
        }
    }
?>

<div class="row">
    <h2>Tambah Data</h2>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="input-label">NIM</label>
            <input type="number" name="nim" placeholder="NIM" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Nama</label>
            <input type="text" name="nama" placeholder="Nama" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Alamat</label>
            <input type="text" name="alamat" placeholder="Alamat" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Agama</label>
            <select name="agama" id="" class="form-select" required>
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Katolik</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" value="1" name="kelamin" class="form-check-input" required>
                <label for="" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" value="2" name="kelamin" class="form-check-input" required>
                <label for="" class="form-check-label">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="input-label">No HP</label>
            <input type="number" name="no_hp" autocomplete="off" placeholder="No HP" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Email</label>
            <input type="email" name="email" autocomplete="off" placeholder="Email@email.com" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Prodi</label>
            <select name="prodi" required id="" class="form-select">
                <?php while ($d_prod = mysqli_fetch_array($s_prod)) { ?>
                    <option value="<?= $d_prod['id_prodi']?>"><?= $d_prod['nama_prodi'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>