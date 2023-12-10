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
                if (isset($onePost)) {
                    echo '  <div class="col-12">
                                <div class="post-wrapper">
                                    <div class="post-title">'.$onePost[0]['ten_post'].'</div>
                                    <div class="post-info">Đăng bởi:'.$onePost[0]['username'].'. Ngày Đăng: '.$onePost[0]['ngay_nhap'].'</div>                
                                    <div class="post-content">'.$onePost[0]['noi_dung'].'</div>';
                }
                if(isset($get3)){
                    echo '          <ol class="post-link-list">
                                        <h3>Xem nhanh</h3>';
                    foreach ($get3 as $post) {
                        echo '          <li><a href="post_detail&id='.$post['id'].'">'.$post['ten_post'].'</a></li>';
                    }
                    echo '          </ol>';
                }
                        echo '  </div>
                            </div>';
            ?>
            
        </div>
    </div>
</div>