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