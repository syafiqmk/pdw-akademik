<?php 

    // get page
    $page = $_GET["page"];

    function page($page) {
        switch ($page) {
            case 'u-jur':
                include "page/jurusan/u-jur.php";
                break;

            case 'c-jur':
                include "page/jurusan/c-jur.php";
                break;

            case 'd-jur':
                include "page/jurusan/del.php";
                break;

            case 'prodi':
                include "page/prodi/index.php";
                break;

            case 'u-prod':
                include "page/prodi/u-prod.php";
                break;

            case 'c-prod':
                include "page/prodi/c-prod.php";
                break;

            case 'd-prod':
                include "page/prodi/del.php";
                break;

            case 'mahasiswa':
                include "page/mahasiswa/index.php";
                break;

            case 'u-maha':
                include "page/mahasiswa/u-maha.php";
                break;

            case 'c-maha':
                include "page/mahasiswa/c-maha.php";
                break;

            case 'd-maha':
                include "page/mahasiswa/del.php";
                break;

            case 'det-maha':
                include "page/mahasiswa/det-maha.php";
                break;

            default:
                include "page/jurusan/index.php";
                break;
        }
    }
?>