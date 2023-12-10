

<div class="container">
    <div class="app">
        
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                    </ol>
                </nav>
            </div>
        </div>

        <table border="1" style="border-collapse:collapse;text-align:center;" >
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Hành động</th>
            </tr>
            <?php

                if(isset($_SESSION['cart'])){
                    $kq="";
                    $i = 0;
                    $tongtien = 0;
                    foreach ($_SESSION['cart'] as $sp) {//Foreach không quản lý theo chỉ mục của mảng
                        $ttien = $sp[3]*$sp[4];
                        $kq.='  <tr>
                                    <td>'.($i+1).'</td>
                                    <td><img src="Assets/uploads/sanpham/'.$sp[2].'" width = "75"</td>
                                    <td>'.$sp[1].'</td>
                                    <td>'.number_format($sp[3]).'</td>
                                    <td>'.$sp[4].'</td>
                                    <td>'.number_format($ttien).'</td>
                                    <td><a href="del-cart-cart&i='.$i.'" style="color:black;">Xóa</a></td>
                                </tr>';
                        $i++;
                        $tongtien += $ttien;    
                    }
                    $tong = '   <tr>
                                    <td><span style="font-weight: bold; color: red;font-size: larger;">Tổng</span></td>
                                    <td colspan="6" ><span style="font-weight: bold; font-size: larger;">'.number_format($tongtien).' Đ</span></td>                    
                                </tr>';
                        
                    echo $kq.$tong;
                    echo '<tr>
                                
                                <td colspan="7" style="background-color: #CCC;"><a href="del-cart-cart&taochoxoa=99">Xóa toàn bộ</a></td>  
                                                 
                            </tr>';

                }
            ?>    
        </table>
        <br><br><br>
        <div class="bill">
                <form action="index.php?act=thanhtoan" method="post">
                        <input type="hidden" name="id_user" value="<?=$_SESSION['id']?>">
                        <input type="hidden" name="tongtien" value="<?=$tongtien?>">
                        <?php
                            $mydate=getdate(date("U"));
                            $ngay = "$mydate[mday] - $mydate[mon] - $mydate[year]";
                        ?>
                        <input type="hidden" name="ngay" value="<?=$ngay?>">  
                        <h3 style="text-align: center">THÔNG TIN ĐẶT HÀNG</h3>
                        <div class="email">
                            <label for="">Email đặt hàng: </label><br>
                            <input type="email" value="<?=(isset($email)?$email:"")?>" name="email"  placeholder="Nhập email của bạn" required>
                            
                        </div>
                        <div class="hoten">
                            <label for="">Họ và Tên Người Nhận: </label><br>
                            <input type="text" value="<?=(isset($hoten)?$hoten:"")?>" name="hoten"  placeholder="Vui lòng nhập họ và tên" required>
                            
                        </div>
                        <div class="diachi">
                            <label for="">Địa chỉ người nhận: </label><br>
                            <input type="text" name="diachi"  placeholder="Nhập địa chỉ" value="<?=(isset($diachi)?$diachi:"")?>"required>
                        </div>                        
                        <div class="sdt">
                            <label for="">Số điện thoại nhận hàng</label><br>
                            <input type="text" name="sdt"  placeholder="Nhập số điện thoại" required><br>
                            <span style="color:red;font-size:1.3rem;"><?=(isset($errorsdt)?$errorsdt:"")?></span>
                        </div>
                        <div class="vanchuyen">
                            <h3>Vận chuyển và thanh toán</h3>
                            <hr>                    
                            <div class="hinhthuc">
                                <label for="" style="font-weight: bold;font-size: 18px;">Hình thức vận chuyển</label><br><br>
                                <div class="fix"><input id="ht1" type="radio" name="hinhthuc" checked value="Giao trong 48h"><label for="ht1"> Giao hàng trong 48 giờ: <b>30,000đ</b></label></div>
                                <br>
                                <div class="fix"><input id="ht2" type="radio" name="hinhthuc" value="Giao trong 2h"><label for="ht2"> Giao hàng nhanh trong 2 giờ (Trễ tặng 100k): 90,000đ </label> </div>
                                                              
                            </div>
                            <hr>
                            <div class="phuongthuc">
                                <label for="" style="font-weight: bold;font-size: 18px;">Phương thức thanh toán</label><br><br>
                                <div class="fix"><input id="pttt1" type="radio" name="pttt" checked value="COD"><label for="pttt1">Thanh toán tiền khi nhận hàng
                                    (COD)</label></div>
                                <br>
                                <div class="fix"><input id="pttt2" type="radio" name="pttt" value="Chuyển khoản"><label for="pttt2">Thanh toán trực tuyến</label></div>
                                
                            </div>
                        </div>
                    <input type="submit" value="Thanh Toán" name="checkout" style="background-color:orangered;color:white;font-weight:bold;padding:5px;">
                </form>
        </div>

        <!-- <div class="container">
            <div class="shopping-cart cartt">

                <div class="column-labels">
                    <label class="product-image">Image</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Đơn Giá</label>
                    <label class="product-quantity">Số lượng</label>
                    <label class="product-removal">Xóa</label>
                    <label class="product-line-price">Tổng Giá</label>
                </div>

                
                <div class="product">

                


                <button class="checkout">Thanh Toán</button>

            </div>
        </div> -->

        
       
    </div>
</div>   
