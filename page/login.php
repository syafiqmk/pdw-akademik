<?php 

    // include koneksi
    include "../koneksi.php";

    if (isset($_POST["submit"])) {
        $user = $_POST["user"];
        $pass = md5($_POST["pass"]);

        $s_user = mysqli_query($kon, "SELECT * FROM user WHERE userid = '$user' AND passw = '$pass'");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        #form {
            margin-top: 100px;
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="form">
        <h2>Login</h2>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="user" class="form-control" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="class-mb 3">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>

    <!-- link script -->
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>

<?php 

    // row check
    $row = mysqli_num_rows($s_user);

    if ($row >= 1) {
        $data = mysqli_fetch_array($s_user);
        $_SESSION["user"] = $data['userid'];
        header("location:../index.php");
    } else {
        echo "<script>window.alert('Username/Password Salah/Tidak ada!!!')</script>";
    }

?>