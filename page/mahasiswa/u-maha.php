<?php 
    //include koneksi
    include "koneksi.php";

    //get
    $id = $_GET["id"];

    //select prodi
    $s_prod = mysqli_query($kon, "SELECT * FROM prodi");
    $s_maha = mysqli_query($kon, "SELECT * FROM mahasiswa WHERE nim = '$id'");
    $d_maha = mysqli_fetch_array($s_maha);

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

        $q_u_maha = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', tgl_lahir = '$tgl_lahir', alamat = '$alamat', agama = '$agama', kelamin = '$kelamin', no_hp = '$no_hp', email = '$email', id_prodi = '$prodi' WHERE nim = '$id'";
        $u_maha = mysqli_query($kon, $q_u_maha);

        if ($u_maha) {
            header("location:index.php?page=mahasiswa");
        } else {
            echo "<script>window.alert('Edit data gagal!!')</script>";
        }
    }
?>

<div class="row">
    <h2>Edit Data</h2>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="input-label">NIM</label>
            <input value="<?= $d_maha['nim']?>" type="number" name="nim" placeholder="NIM" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Nama</label>
            <input value="<?= $d_maha['nama']?>" type="text" name="nama" placeholder="Nama" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Tanggal Lahir</label>
            <input value="<?= $d_maha['tgl_lahir']?>" type="date" name="tgl_lahir" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Alamat</label>
            <input value="<?= $d_maha['alamat']?>" type="text" name="alamat" placeholder="Alamat" autocomplete="off" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Agama</label>
            <select name="agama" id="" class="form-select" required>
                <option value="1" <?php if($d_maha['agama'] == 1) echo "selected";?>>Islam</option>
                <option value="2" <?php if($d_maha['agama'] == 2) echo "selected";?>>Kristen</option>
                <option value="3" <?php if($d_maha['agama'] == 3) echo "selected";?>>Katolik</option>
                <option value="4" <?php if($d_maha['agama'] == 4) echo "selected";?>>Hindu</option>
                <option value="5" <?php if($d_maha['agama'] == 5) echo "selected";?>>Budha</option>
                <option value="6" <?php if($d_maha['agama'] == 6) echo "selected";?>>Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Jenis Kelamin</label>
            <div class="form-check">
                <input <?php if($d_maha['kelamin'] == 1) echo "checked";?> type="radio" value="1" name="kelamin" class="form-check-input" required>
                <label for="" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input <?php if($d_maha['kelamin'] == 2) echo "checked";?> type="radio" value="2" name="kelamin" class="form-check-input" required>
                <label for="" class="form-check-label">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="input-label">No HP</label>
            <input value="<?= $d_maha['no_hp']?>" type="number" name="no_hp" autocomplete="off" placeholder="No HP" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Email</label>
            <input value="<?= $d_maha['email']?>" type="email" name="email" autocomplete="off" placeholder="Email@email.com" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="input-label">Prodi</label>
            <select name="prodi" required id="" class="form-select">
                <?php while ($d_prod = mysqli_fetch_array($s_prod)) { ?>
                    <option value="<?= $d_prod['id_prodi']?>" <?php if($d_maha['id_prodi'] == $d_prod['id_prodi']) echo "selected";?>><?= $d_prod['nama_prodi'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>