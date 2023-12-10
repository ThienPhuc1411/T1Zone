<?php

    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    if(isset($_POST['muahang']) && $_POST['muahang']){
        $tensp = $_POST['tensp'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $id = $_POST['id'];
        if(isset($_POST['so_luong']) && $_POST['so_luong'] > 0){
            $so_luong = $_POST['so_luong'];
        }else{
            $so_luong = 1;
        }
        $temp = 0;

        if(count($_SESSION['cart']) > 0){
            $i = 0;
            foreach ($_SESSION['cart'] as $item){
                if($item[0] == $id){
                    $so_luong += $item[4];
                    $_SESSION['cart'][$i][4] = $so_luong;
                    $temp = 1;
                    break;
                }
                $i++;
            }
        }

        if($temp == 0){
            $item = [$id,$tensp,$img,$price,$so_luong];
            array_push($_SESSION['cart'],$item);
        }
        // header('location:../../index.php?act=viewcart');
    }
?>