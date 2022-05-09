<?php 
    // include koneksi
    include "koneksi.php";

    //user check
    if (!$_SESSION["user"]) {
        header("location:page/login.php");
    }

    //get variable
    $page = $_GET["page"];

    //include title
    include "title.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php title($page) ?></title>
    <!-- link style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    


    <!-- link script -->
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>