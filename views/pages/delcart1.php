<?php
    session_start();
    ob_start();

    if(isset($_GET['i']) && $_GET['i'] >= 0){
        array_splice($_SESSION['cart'],$_GET['i'],1);
    }else{
        if(isset($_GET['taochoxoa']) && $_GET['taochoxoa'] == 99){
            unset($_SESSION['cart']);
        }
    }

    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
        header('location:../../index.php?act=viewcart');
    }else{
        header('location:../../index.php?act=sanpham');
    }
?>