<?php
    include 'page/header.php';
    
    if(isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'beranda':
                include 'page/beranda.php';
            break;
            case 'tentang':
                include 'page/tentang.php';
            break;
            case 'hitung':
                include 'page/zakat-penghasilan.php';
            break;
            case 'penghasilan':
                include 'page/zakat-penghasilan.php';
            break;
            case 'maal':
                include 'page/zakat-maal.php';
            break;
            default:
                echo '<center><h3>Maaf, halaman tidak ditemukan!</h3></center>';
            break;
        }
    } else if(isset($_GET['article'])) {
        $article = $_GET['article'];

        switch ($article) {
            case '001':
                include 'post/article-001.php';
            break;
            case '002':
                include 'post/article-002.php';
            break;
            case '003':
                include 'post/article-003.php';
            break;
            default:
                echo '<center><h3>Maaf, halaman tidak ditemukan!</h3></center>';
            break;
        }
    } else {
        include 'page/beranda.php';
    }

    include 'page/footer.php';
?>