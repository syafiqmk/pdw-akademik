<?php 

    //get page
    $page = $_GET['page'];

    // page switching
    switch ($page) {
        case 'jurusan':
            echo "Jurusan";
            break;

        case 'u-jur':
            echo "Edit Jurusan";
            break;

        case 'c-jur':
            echo "Tambah Jurusan";
            break;

        case 'prodi':
            echo "Prodi";
            break;

        case 'u-prod':
            echo "Edit Prodi";
            break;

        case 'c-prod':
            echo "Tambah Prodi";
            break;

        case 'mahasiswa':
            echo "Mahasiswa";
            break;

        case 'u-maha':
            echo "Edit Mahasiswa";
            break;

        case 'c-maha':
            echo "Tambah Mahasiswa";
            break;
        
        default:
            echo "Default Title";
            break;
    }
?>