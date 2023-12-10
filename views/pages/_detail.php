
<div class="container">
    <?php
        if (isset($onesp)) {
            $mydate = getdate(date("U"));
            $ngay_nhap = "$mydate[mday] - $mydate[mon] - $mydate[year]";
            if ($onesp[0]['price_sale'] != 0) {

                $sale = ceil((($onesp[0]['price_sale'] - $onesp[0]['price']) / $onesp[0]['price']) * 100);
                $price = '  <span style="font-size: 20px;">Giá: </span><p class="old-price mb-1" style="color:#9aa4ae;"><del>' . number_format($onesp[0]['price'],0,",",".") . ' đ</del>
                                        <span class="old-price-discount text-danger">(' . $sale . '% off)</span>
                                    </p>
                                    <p class="new-price text-bold mb-1">' . number_format($onesp[0]['price_sale'],0,",",".") . ' đ</p>
                                    ';
                $gia = $onesp[0]['price_sale'];
            } else {
                $price = '  <span style="font-size: 20px;">Giá: </span><p class="new-price text-bold mb-1">' . number_format($onesp[0]['price'],0,",",".") . ' đ</p>
                                    ';
                $gia = $onesp[0]['price'];
            }
            echo '  <div class="product-detail-main">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="main-img">
                                            <img class="img-fluid"
                                                src="Assets/uploads/sanpham/' . $onesp[0]['img'] . '" id="img-main" alt="ProductS">                            
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="main-description px-2">
                                            <div class="category ">
                                                Danh Mục: ' . $onedm[0]['tendm'] . ' 
                                            </div>
                                            <div class="product-title text-bold my-3">
                                                ' . $onesp[0]['tensp'] . '
                                            </div>
                
                
                                            <div class="price-area my-4">
                                                ' . $price . '
                                            </div>                
                                            <div class="buttons d-flex my-5">
                                                <form class="muahang" action="add-to-cart" method="post" style="text-align:center;">
                                                    <input type="hidden" name="id" value="' . $onesp[0]['id'] . '">
                                                    <input type="hidden" name="tensp" value="' . $onesp[0]['tensp'] . '">
                                                    <input type="hidden" name="img" value="' . $onesp[0]['img'] . '">
                                                    <input type="hidden" name="price" value="' . $gia . '">
                                                    <input type="number" name="so_luong" class="form-control" id="cart_quantity" value="1" min="1"
                                                        max="10"  name="cart_quantity">
                                                        <br>
                                                    <input class="shadow btn custom-btn" type="submit" value="Đặt Hàng" name="muahang">
                                                    <div class="block quantity">
                                                    
                                                </div>
                                                </form>                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            ';
        }
    
    ?>
    
    
    <div id="product_content_detail" class="row">
        <div id="product_left" class="col-md-12 col-xs-12">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active shadow btn custom-btn" style="width:20%;"><a href="#chitiet" aria-controls="chitiet" role="tab" data-toggle="tab" style="color:white;">Mô tả sản phẩm</a>
                    </li>
                    <li role="presentation"  class="shadow btn custom-btn"  ><a href="#review" aria-controls="dacdiem" role="tab" data-toggle="tab"  style="color:white;">Đánh
                            giá (<?=(isset($showcmt)?count($showcmt):0)?>)</a>
                    </li>



                </ul>
                <!-- Tab panes -->

               
    
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="chitiet">
                        <p>
                            </span></p>
                        <?php
                        if (isset($onesp)) {
                            echo $onesp[0]['detail'];
                        }
                        ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="review">
                        <p>

                        <div class="review-heading">Bình Luận</div>
                      
                        <p class="mb-20">
                        <?php
                        // nếu được duyệt thì sẽ hiện list đã comment
                        if(isset($showcmt) && count($showcmt) > 0){
                            foreach ($showcmt as $cmt) {
                                if($cmt['hoten'] == ""){
                                    $ten = $cmt['username'];
                                }else{
                                    $ten = $cmt['hoten'];
                                }
                                echo '<div class="listcmt-container">                             
                                        <div class="box-listcmt">
                                            <p  style="font-size: 20px; font-weight: bold;display: flex;justify-content:space-between "><span class="username" class="username">' . $ten. '</span> <span  class="ngaycmt">' . $cmt['ngay'] . '</span> </p>
                                            <p  style="font-size: 20px; class="noidung-cmt" class="noidung">' . $cmt['noidung'] . '</p>
                                        </div>
                                 
                                     </div>';
                             
                            }
                        }else{
                            echo '  <div class="listcmt-container">
                                        <p style="font-size:1.4rem;">Sản phẩm chưa có bình luận</p>
                                    </div>';
                        }                        
                        ?>
                        </p>  
                        

                            <div class="form-group">
                                <?php
                                if (isset($_SESSION['hoten'])) {
                                    
                                $mydate = getdate(date("U"));
                                $ngay_nhap = "$mydate[mday] - $mydate[mon] - $mydate[year]";
                                // box nhận cmt để add cmt tới database
                                echo '  
                                        <div class="box-cmt">
                                            <h3 style="margin-top: 0">Bình luận</h3>
                                            <form action="index.php?act=addcmt&id=' . $onesp[0]['id'] . '" method="post" style="margin-bottom:50px">
                                                <input type="hidden" name="ngay" value="' . $ngay_nhap . '">
                                                <textarea  id="" cols="30" class="form-control" rows="5" name="noidung" style="font-size:1.4rem;"  placeholder="Vui Lòng Viết Bình Luận Ở Đây"></textarea>
                                                <input style="font-size: 20px;" name ="comment"type="submit" class="round-black-btn" value="Gửi">
                                            </form>                                        
                                        </div>';
                                    
                                } else {
                                    
                                $mydate = getdate(date("U"));
                                $ngay_nhap = "$mydate[mday] - $mydate[mon] - $mydate[year]";
                                // show ra box login để được cmt
                                echo '  
                                    <div class="box-cmt">
                                        <div class="topbar-content register-container">
                                            <button class="submit" onclick="document.getElementById(`id02`).style.display=`block`" style="width:auto;">Đăng nhập để Bình luận</button>      
                                        </div>
                                    </div>
                                    <div id="id02" class="modal-cmt">
                                        <form class="modal-content-cmt animate" action="login-cmt" method="post">
                                            <div class="imgcontainer">
                                                <span onclick="document.getElementById(`id02`).style.display=`none`" class="close" title="Close Modal">&times;</span>
                                                    <img src="./Assets/IMG/logo.png" alt="Avatar" class="avatar">
                                            </div>
                                            <div class="container">
                                                <label for="username"><b>Username</b></label>
                                                <input class="login" type="text" placeholder="Enter Username" name="username" required>
                                                <label for="pass"><b>Password</b></label>
                                                <input class="login" type="password" placeholder="Enter Password" name="pass" required>
                                                <span style="color:red;font-size: 13px"><?=isset($error)? $error:""?></span>
                                                <input class="submit" type="submit" name="login" value="Login">
                                                
                                                <label>
                                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                                </label>
                                            </div>
                                            <div class="container" style="background-color:#f1f1f1">
                                                <button type="button" onclick="document.getElementById(`id02`).style.display=`none`"
                                                    class="cancelbtn">Hủy</button>
                                                <span class="psw">Quên <a href="#">password?</a></span>
                                            </div>
                                        </form>
                                    </div>';
                                    
                                }
                                ?>
                            </div>


                      



                        </p>
                    </div>

                </div>
            </div>




        </div>

    </div>
</div>


</div>