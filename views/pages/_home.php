<div class="slide-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slide-main">
                    <div class="slide-main-item">
                        <img src="./Assets/IMG/banner1.jpg" alt="" class="w-100">
                    </div>
                    <div class="slide-main-item">
                        <img src="./Assets/IMG/banner2.jpg" alt="" class="w-100">
                    </div>
                    <div class="slide-main-item">
                        <img src="./Assets/IMG/banner3.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="categories-section lazyload">
    <div class="container">
        <div class="cate-tabs">
            <ul class="cate-tabs-list">
                <li class="cate-tabs-list-line"></li>
                <li class="cate-tabs-list-item active" data-filter="full">Nổi bật</li>
                <?php
                if (isset($dsdm)) {
                    foreach ($dsdm as $dm) {
                        echo '<li class="cate-tabs-list-item" data-filter="' . $dm['tendm'] . '">' . $dm['tendm'] . '</li>';
                    }
                }
                ?>
            </ul>
        </div>
        <div class="cate-slide">
            <div class="row">
                <div class="col-12 cate-slide-wrapper">
                    <div class="row item">
                        <?php
                        if (isset($dsdm)) {
                            foreach ($dsdm as $dm) {
                                $sp = getall_Sp_site($dm['tendm'], 8,"");
                                foreach ($sp as $sp) {
                                    if ($sp['price_sale'] != 0) {
                                        $gia = $sp['price_sale'];
                                    } else {
                                        $gia = $sp['price'];
                                    }
                                    echo '  <div class="col-lg-3 col-md-6 col-12 item-wrapper show" data-item="'.$dm['tendm'].'">
                                            <div class="cate-slide-item show">
                                                <div class="cate-item-label">New</div>
                                                <a href="detail&id=' . $sp['id'] . '" class="cate-slide-link">
                                                    <img src="./Assets/uploads/sanpham/' . $sp['img'] . '" alt="" style="width:100%">
                                                    <div class="cate-item-content">
                                                        <h2>' . number_format($gia) . '</h2>
                                                        <p>' . $sp['tensp'] . '</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>';
                                }
                            }
                        }
                        ?>                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
<div class="topitems-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="topitems-banner">
                    <img src="./Assets/IMG/banner5.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="topitems-cate">
                    <div class="topitems-title">
                        Top Laptop Văn Phòng
                    </div>
                    <div class="topitems-slide">
                        <?php
                        if (isset($sp_LVP) && count($sp_LVP) > 0) {
                            foreach ($sp_LVP as $LVP) {
                                if ($LVP['price_sale'] != 0) {
                                    $gia = $LVP['price_sale'];
                                    $sale = ceil((($LVP['price_sale'] - $LVP['price']) / $LVP['price']) * 100);
                                    $showsale = "<div class='cate-item-label'>$sale%</div>";
                                } else {
                                    $gia = $LVP['price'];
                                }
                                echo '  <div class="topitems-slide-item">
                                                '.$showsale.'
                                                <a href="detail&id=' . $LVP['id'] . '">
                                                    <img src="./Assets/uploads/sanpham/' . $LVP['img'] . '" alt="">
                                                    <div class="topitems-item-content">
                                                        <h2>' . number_format($gia) . 'Đ</h2>
                                                        <p style="-webkit-line-clamp: 2;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        display: -webkit-box;">' . $LVP['tensp'] . '</p>
                                                    </div>
                                                </a>
                                            </div>';
                            }
                        }

                        ?>
                    </div>
                    <div class="topitems-button"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-sale">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="banner-wrapper">
                    <img src="./Assets/IMG/banner-4-home-1.jpg" alt="">
                    <div class="banner-content">
                        <h4>Accessories</h4>
                        <h2>Big sale up to <span>40% off</span></h2>
                        <a href="">get it now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="banner-wrapper">
                    <img src="./Assets/IMG/banner-5-home-1.jpg" alt="">
                    <div class="banner-content haha">
                                <h4>Accessories</h4>
                                <h2>Big sale up to <span>40% off</span></h2>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="topitems-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="topitems-cate">
                    <div class="topitems-title">
                        Top Laptop Gaming
                    </div>
                    <div class="topitems-slide">
                        <?php
                        if (isset($sp_LG) && count($sp_LG) > 0) {
                            foreach ($sp_LG as $LG) {
                                if ($LG['price_sale'] != 0) {
                                    $gia = $LG['price_sale'];
                                    $sale = ceil((($LG['price_sale'] - $LG['price']) / $LG['price']) * 100);
                                    $showsale = "<div class='cate-item-label'>$sale%</div>";
                                } else {
                                    $gia = $LG['price'];
                                }
                                echo '  <div class="topitems-slide-item">
                                                '.$showsale.'
                                                <a href="detail&id=' . $LG['id'] . '">
                                                    <img src="./Assets/uploads/sanpham/' . $LG['img'] . '" alt="">
                                                    <div class="topitems-item-content">
                                                        <h2>' . number_format($gia) . 'Đ</h2>
                                                        <p style="-webkit-line-clamp: 2;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        display: -webkit-box;">' . $LG['tensp'] . '</p>
                                                    </div>
                                                </a>
                                            </div>';
                            }
                        }

                        ?>
                    </div>
                    <div class="topitems-button"></div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="topitems-banner">
                    <img src="./Assets/IMG/banner6.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
<div class="brands-section">
    <div class="container">
        <div class="row row-cols-6 row-cols-lg-8">
            <?php
            if (isset($dsth)) {
                foreach ($dsth as $th) {
                    echo '  <div class="col">
                                        <div class="brands-item">
                                            <a href="sort_th&id_th=' . $th['id'] . '">
                                            <img src="./Assets/uploads/logo/' . $th['logo'] . '" alt=""  width="150"></a>
                                        </div>
                                    </div>    ';
                }
            }
            ?>
        </div>
    </div>
</div>