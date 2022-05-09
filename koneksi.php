<?php 
    // mematikan error reporting
    error_reporting(0);

    // start session
    session_start();

    //variable database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pdweb";

    $kon = mysqli_connect($host, $user, $pass, $db);

?>