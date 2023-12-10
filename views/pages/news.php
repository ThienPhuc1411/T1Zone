    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Trang Chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="main-section">
        <div class="container">
            <div class="row">
                <?php
                    if(isset($kq) && count($kq) > 0){
                        foreach ($kq as $post) {
                        echo '  <div class="col-4">
                                    <div class="news-item">
                                        <a class="news-item-img" href="post_detail&id='.$post['id'].'"><img src="Assets/uploads/post/'.$post['img'].'" alt=""></a>
                                        <a class="news-item-title" href="post_detail&id='.$post['id'].'">'.$post['ten_post'].'</a>
                                        <div class="news-item-info">
                                            '.$post['noidung_ngan'].'
                                        </div>
                                        <div class="news-item-tags">
                                            <a href="#!"><i class=`bx bx-time-five`></i>'.$post['ngay_nhap'].'</a>
                                            <a href="#!"><i class=`bx bx-user-circle`></i>'.$post['username'].'</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    