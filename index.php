<?php
    session_start();

    $default='main';
    if(isset($_GET['p'])==''){
        $page=$default;
    }else{
        $page=$_GET['p'];
    }
    
    include('pages/header.php');
    include('pages/nav.php');
    if(file_exists('pages/'.$page.'.php')){
        include('pages/'.$page.'.php');
    }
    include('pages/footer.php');
?>