<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1 Zone</title>
    <link rel="stylesheet" href="./Assets/css/reset.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/home.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity=" sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="Assets/css/login.css">
    <link rel="stylesheet" href="./Assets/css/shop.css">
    <link rel="stylesheet" href="./Assets/css/detail.css">
    <link rel="stylesheet" href="./Assets/css/base.css">
    <link rel="stylesheet" href="./Assets/css/cart.css">
    <link rel="stylesheet" href="./Assets/css/change_profile.css">
    <link rel="stylesheet" href="./Assets/css/profile.css">
    <link rel="stylesheet" href="./Assets/css/updatepass.css">
    <link rel="stylesheet" href="./Assets/css/contact.css">
    <link rel="stylesheet" href="./Assets/css/quenMK.css">
    <link rel="stylesheet" href="./Assets/css/wait.css">
    <link rel="stylesheet" href="./Assets/css/responsive.css">
    <link rel="shortcut icon" href="../Assets/IMG/logo1.png" />
    <script src="//hstatic.net/0/0/global/design/js/jquery.min.1.11.0.js"></script>
    <script src="//hstatic.net/0/0/global/option_selection.js"></script>
    <link href='//theme.hstatic.net/1000026716/1000440777/14/general.css?v=30241' rel='stylesheet' type='text/css'
        media='all' />
    <link href='//theme.hstatic.net/1000026716/1000440777/14/jquery-ui.css?v=30241' rel='stylesheet' type='text/css'
        media='all' />
    <link href='//theme.hstatic.net/1000026716/1000440777/14/styles.css?v=30241' rel='stylesheet' type='text/css'
        media='all' />
    <link href='//theme.hstatic.net/1000026716/1000440777/14/font-awesome.css?v=30241' rel='stylesheet' type='text/css'
        media='all' />
    <link href='//theme.hstatic.net/1000026716/1000440777/14/header_new.css?v=30241' rel='stylesheet' type='text/css'
        media='all' />
    <script src='//theme.hstatic.net/1000026716/1000440777/14/bootstrap.js?v=30241' type='text/javascript'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />        
    <link rel="stylesheet" href="./Assets//css/news.css ">
    <link rel="stylesheet" href="./Assets/css/newsDetail.css">
</head>

<body>
    <div class="app">
        <div class="header-wrapper">
            <div class="header-topbar d-none d-md-block ">
                <div class="container topbar-container ">
                    <div class="topbar-content">
                        <i class='bx bx-smile'></i>
                        <span>Miễn phí vận chuyển trong bán kính 10km</span>
                    </div>
                    <?php
                    if (isset($_SESSION['hoten'])) {
                        echo '  <div class="topbar-content register-container">
                                        <img src="Assets/IMG/avavtar.jpg" alt="">
                                        <span>Hello <a href="profile">' . $_SESSION['hoten'] . '</a></span> |
                                        <span><a href="logout">Thoát</a></span>
                                       
                                    </div>';
                    } else {
                        echo '<div class="topbar-content register-container">
                            <button class="submit" onclick="document.getElementById(`id01`).style.display=`block`" style="width:auto;">Đăng Nhập</button>
                            <div class="register-outline"></div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="header-navbar d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-3">
                                    <div class="header-nav-logo">
                                        <a href="home"><img src="./Assets/IMG/logo.png" alt="" width="100%"></a>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <form action="search" class="header-nav-searchform" method="post">
                                        <input name="search" type="text" class="searchform-text"
                                            placeholder="Tôi muốn tìm....">
                                        <select name="id_dm" id="" class="searchform-select">
                                            <option value="0">Danh mục</option>
                                            <?php
                                            foreach ($dsdm as $dm) {
                                                echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <input name="timkiem" type="submit" value="Tìm Kiếm" class="searchform-submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="header-nav-icons">
                                <div class="nav-icons-item cart-button">
                                    <i class='bx bx-cart'></i>
                                    <span>
                                        <?=(isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0) ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-categories d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="cate-list">
                                <li class="cate-list-item">
                                    <a href="#">Danh Mục</a>
                                </li>
                                <li class="cate-list-item">
                                    <a href="home">Trang chủ</a>
                                </li>
                                <li class="cate-list-item">
                                    <a href="sanpham">Sản Phẩm</a>
                                </li>
                                <li class="cate-list-item">
                                    <a href="post">Tin Tức</a>
                                </li>
                                <li class="cate-list-item">
                                    <a href="contact">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile-nav d-md-none">
                <div class="container">
                    <div class="row">
                        <div class="col-3 mobile-nav-left">
                            <i class='bx bx-menu mobile-nav-menu'></i>
                            <i class='bx bx-search-alt-2 mobile-nav-search'></i>
                        </div>
                        <div class="col-6 mobile-nav-mid">
                            <a href="home">
                                <img src="./Assets/IMG/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-3 mobile-nav-right">
                            <div class="header-nav-icons">
                                <div class="nav-icons-item">
                                    <i class='bx bx-refresh'></i>
                                    <span>0</span>
                                </div>
                                <div class="nav-icons-item cart-button">
                                    <i class='bx bx-cart'></i>
                                    <span>
                                        <?=(isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0) ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <div id="id01" class="modal">
                <form class="modal-content animate" action="login" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">&times;</span>
                        <img src="./Assets/IMG/logo.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="container">
                        <label for="username"><b>Tên Đăng Nhập</b></label>
                        <input class="login" type="text" placeholder="Nhập Tên Đăng Nhập" name="username" required>
                        <label for="pass"><b>Mật Khẩu</b></label>
                        <input class="login" type="password" placeholder="Nhập Mật Khẩu" name="pass" required>
                        <span style="color:red;font-size: 13px">
                            <?= isset($error) ? $error : "" ?>
                        </span>
                        <input class="submit" type="submit" name="login" value="Đăng Nhập">
                        <!-- <button type="submit">Login</button> -->
                        <label>
                            <a href="register">Chưa có tài khoản?</a>
                        </label>
                        <span class="psw">Quên <a href="quen_MK">Mật Khẩu?</a></span>
                    </div>
                    <!-- <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Hủy</button>

                </div> -->
                </form>
            </div>
            <div class="outline">
            </div>
            <div class="cart-container">
                <div class="cart-title">
                    <h2>Giỏ Hàng</h2>
                    <div class="close-button">
                        &times;
                    </div>
                </div>
                <div class="cart-wishlist">
                    <div class="cart-list">
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            $kq = "";
                            $i = 0;
                            $tongtien = 0;
                            echo '  <div class="cart-wishlist">
                                                        <div class="cart-list">';
                            foreach ($_SESSION['cart'] as $sp) {
                                $ttien = $sp[3] * $sp[4];
                                echo '  <div class="cart-item">
                                                            <a href="index.php?act=" class="cart-item-img">
                                                                <img src="./Assets/uploads/sanpham/' . $sp[2] . '" alt="">
                                                            </a>
                                                            <div class="cart-item-content">
                                                                <div>
                                                                    <a href="index.php?act=" class="cart-item-title">
                                                                        ' . $sp[1] . '
                                                                    </a>
                                                                    <p class="cart-item-price">
                                                                        ' . $sp[4] . ' x ' . number_format($sp[3]) . ' Đ
                                                                    </p>
                                                                </div>
                                                                <a class="cart-item-delete" href="del-cart-shop&i=' . $i . '">
                                                                    &times;
                                                                </a>
                                                            </div>
                                                        </div>';
                                $i++;
                                $tongtien += $ttien;
                            }
                            if (isset($_SESSION['id'])) {
                                $thanhtoan = '  <a href="viewcart" class="cart-link">Đặt hàng</a>';
                            } else {
                                $thanhtoan = '<p style="font-size: 2rem;">Vui lòng đăng nhập để đặt hàng</p>
                            <button class="submit" onclick="document.getElementById(`id01`).style.display=`block`" style="width:auto; padding: 10px; font-size: 1.5rem;">Login</button>';
                            }
                            echo '  <div class="cart-subtotal">
                                                                <h3>Tổng tiền: </h3>
                                                                <div style="font-weight:bold;">' . number_format($tongtien) . ' Đ</div>
                                                            </div>                                                            
                                                            ' . $thanhtoan . '
                                                        </div>
                                                    </div>';
                        }
                        if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
                            echo '  <div class="cart-empty">
                                                        <i class="bx bx-cart"></i>
                                                        <p>Không có sản phẩm</p>
                                                        <a href="sanpham" class="cart-link">Tới Trang Mua Hàng</a>
                                                    </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="mobile-menu-title">
                <h2>Navigation</h2>
                <div class="close-button mobile-menu-button">
                    &times;
                </div>
            </div>
            <ul class="mobile-menu-cate">
                <li class="mobile-menu-item">
                    <a href="#" class="mobile-menu-link">Danh Mục</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="sanpham" class="mobile-menu-link">Sản phẩm</a>
                    <i class='bx bx-plus submenu-button'></i>
                </li>
                <li class="mobile-menu-item mobile-submenu">
                    <?php
                    foreach ($dsdm as $dm) {
                        echo '<a href="sort_dm&id_dm=' . $dm['id'] . '" class="submenu-item">' . $dm['tendm'] . '</a>';
                    }
                    ?>
                </li>
                <li class="mobile-menu-item">
                    <a href="" class="mobile-menu-link">Map</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="contact" class="mobile-menu-link">Liên Hệ</a>
                </li>
            </ul>
            <div class="mobile-menu-login">
                <h2>
                    <?php
                    if (isset($_SESSION['hoten'])) {
                        echo '  <div class="topbar-content register-container">
                                                    <img src="Assets/IMG/avavtar.jpg" alt="">
                                                    <span>Hello <a href="profile">' . $_SESSION['hoten'] . '</a></span> |
                                                    <span><a href="logout">Thoát</a></span>
                                                
                                                </div>';
                    } else {
                        echo '<p class="submit submit-close" onclick="document.getElementById(`id01`).style.display=`block`"
                            style="width:auto;">Đăng nhập hoặc đăng ký</p>
                        <div class="register-outline"></div>';
                    }
                    ?>
                </h2>

            </div>
        </div>
        <div class="mobile-search">
            <form action="search" class="header-nav-searchform" method="post">
                <input name="search" type="text" class="searchform-text" placeholder="Tôi muốn tìm....">
                <input name="timkiem" type="submit" value="Tìm Kiếm" class="searchform-submit">
            </form>
        </div>

        <script>

            const myTimeout = setTimeout(error_Login, 10);
            const myTimeout1 = setTimeout(error_change, 1000);
            function error_Login() {
                if (document.getElementById("id03")) {
                    document.getElementById("id03").style.display = "block";
                }
            }
            function error_change() {
                if (document.getElementById("id10")) {
                    document.getElementById("id10").style.display = "block";
                }
            }
            var modal1 = document.getElementById('id01');
            var modal3 = document.getElementById('id03');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
                if (event.target == moda3) {
                    modal3.style.display = "none";
                }
            }
        </script>