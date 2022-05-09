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
</head>
<body>
    
</body>
</html>