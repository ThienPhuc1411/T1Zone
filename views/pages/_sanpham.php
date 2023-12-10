<?php
$show = 16;
$start = 0;
$pageNum = 1;
if (isset($_GET['pageNum'])) {
    $pageNum = $_GET['pageNum'];
}
$start = ($pageNum - 1) * $show;
$dssp = getall_SanPham_site($start, $show);
$kq = count_sanpham();
$sum = $kq[0];
$tong_page = ceil($sum / $show);
$min = $pageNum - 2;
$max = $pageNum + 2;
if ($min < 1)
    $min = 1;
if ($max > $tong_page)
    $max = $tong_page;
$pageNext = $pageNum + 1;
$pagePrev = $pageNum - 1;
?>

<div class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
</div>
<div class="main-section">
    <div class="container">
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                <div class="left-sidebar">
                    <h2>DANH MỤC</h2>
                    <ul class="filter-list">
                        <li class="filter-item"><a href="sanpham">Tất cả</a></li>
                        <?php
                        foreach ($dsdm as $dm) {
                            echo '<li class="filter-item"><a href="sort_dm&id_dm=' . $dm['id'] . '">' . $dm['tendm'] . '</a></li>';
                        }
                        ?>
                    </ul>
                    <h2>THƯƠNG HIỆU</h2>
                    <ul class="filter-list">
                        <?php
                        foreach ($dsth as $th) {
                            echo '<li class="filter-item"><a href="sort_th&id_th=' . $th['id'] . '">' . $th['tenth'] . '</a></li>';
                        }
                        ?>
                        <!-- <li class="filter-item"><a href="#!">Bose</a></li>
                                <li class="filter-item"><a href="#!">Cannon</a></li>
                                <li class="filter-item"><a href="#!">Logitech</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="d-lg-none">
                <a class="filter-button">
                    <i class='bx bx-filter-alt'></i>
                    Filter
                </a>
            </div>
            <div class="filter-container">
                <div class="left-sidebar">
                    <h2>DANH MỤC</h2>
                    <ul class="filter-list">
                        <li class="filter-item"><a href="sanpham">Tất cả</a></li>
                        <?php
                        foreach ($dsdm as $dm) {
                            echo '<li class="filter-item"><a href="sort_dm&id_dm=' . $dm['id'] . '">' . $dm['tendm'] . '</a></li>';
                        }
                        ?>
                    </ul>
                    <h2>THƯƠNG HIỆU</h2>
                    <ul class="filter-list">
                        <?php
                        foreach ($dsth as $th) {
                            echo '<li class="filter-item"><a href="sort_th&id_th=' . $th['id'] . '">' . $th['tenth'] . '</a></li>';
                        }
                        ?>
                        <!-- <li class="filter-item"><a href="#!">Bose</a></li>
                                <li class="filter-item"><a href="#!">Cannon</a></li>
                                <li class="filter-item"><a href="#!">Logitech</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="products-grid">
                    <div class="row">
                        <?php
                        if (isset($dssp)) {
                            foreach ($dssp as $sp) {
                                if ($sp['price_sale'] != 0) {
                                    $gia = $sp['price_sale'];
                                } else {
                                    $gia = $sp['price'];
                                }
                                echo '  <div class="col-6 col-lg-3">
                                                        <div class="products-item">
                                                            <a href="detail&id=' . $sp['id'] . '">
                                                                <img src="./Assets/uploads/sanpham/' . $sp['img'] . '" alt="">
                                                                <div class="products-item-content">
                                                                    <h2 style="font-weight:bold;font-size:16px;">' . number_format($gia, 0, ",", ".") . ' đ</h2>
                                                                    <p>' . $sp['tensp'] . '</p>
                                                            </a>
                                                        </div>
                                                            
                                                            <form class="muahang" action="add-to-cart" method="post" style="text-align:center;">
                                                                <input type="hidden" name="id" value="' . $sp['id'] . '">
                                                                <input type="hidden" name="tensp" value="' . $sp['tensp'] . '">
                                                                <input type="hidden" name="img" value="' . $sp['img'] . '">
                                                                <input type="hidden" name="price" value="' . $gia . '">
                                                                <input type="hidden" name="so_luong" value="1">
                                                                <input class="submit" type="submit" value="Mua Hàng" name="muahang">
                                                            </form>
                                                        </div>                                                    
                                                    </div>
                                                    ';
                            }
                        } else {
                            echo '<h3>Không tìm được sản phẩm<h3>';
                        }

                        ?>

                    </div>
                </div>
                <nav aria-label="Page navigation example" class="pageNum" >
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="sanpham">
                                << </a>
                        </li>
                        <?php
                        if ($pageNum > 1) {
                            echo '  <li class="page-item"><a class="page-link" href="sanpham&pageNum=' . $pagePrev . '"> < </a></li>';
                        }
                        ?>
                        <?php
                        for ($i = $min; $i <= $max; $i++) {
                            echo '<li class="page-item"><a class="page-link" href="sanpham&pageNum=' . $i . '">' . $i . '</a></li>';
                        }
                        ?>
                        <?php
                        if ($pageNum < $tong_page) {
                            echo '  <li class="page-item"><a class="page-link" href="sanpham&pageNum=' . $pageNext . '"> > </a></li>
                                        ';
                        }
                        ?>
                        <li class="page-item"><a class="page-link" href="sanpham&pageNum=<?= $tong_page ?>"> >>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="products-grid">
                <div class="row">
                    <?php
                        if (isset($dssp)) {
                            foreach ($dssp as $sp) {
                                if ($sp['price_sale'] != 0) {
                                    $gia = $sp['price_sale'];
                                    $sale = ceil((($sp['price_sale'] - $sp['price']) / $sp['price']) * 100);
                                    $showsale = "<div class='cate-item-label'>$sale%</div>";
                                } else {
                                    $gia = $sp['price'];
                                }
                                echo '  <div class="col-3">
                                                        <div class="products-item">
                                                            '.$showsale.'
                                                            <a href="detail&id=' . $sp['id'] . '">
                                                                <img src="./Assets/uploads/sanpham/' . $sp['img'] . '" alt="">
                                                                <div class="products-item-content">
                                                                    <h2 style="font-weight:bold;font-size:16px;">' . number_format($gia, 0, ",", ".") . ' đ</h2>
                                                                    <p>' . $sp['tensp'] . '</p>
                                                            </a>
                                                        </div>
                                                            
                                                            <form class="muahang" action="add-to-cart" method="post" style="text-align:center;">
                                                                <input type="hidden" name="id" value="' . $sp['id'] . '">
                                                                <input type="hidden" name="tensp" value="' . $sp['tensp'] . '">
                                                                <input type="hidden" name="img" value="' . $sp['img'] . '">
                                                                <input type="hidden" name="price" value="' . $gia . '">
                                                                <input type="hidden" name="so_luong" value="1">
                                                                <input class="submit" type="submit" value="Mua Hàng" name="muahang">
                                                            </form>
                                                        </div>                                                    
                                                    </div>
                                                    ';
                            }
                        } else {
                            echo '<h3>Không tìm được sản phẩm<h3>';
                        }

                        ?>

                </div>
            </div>
            
        </div>
    </div>
</div>
</div>