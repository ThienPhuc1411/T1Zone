
    <div class="profile-container">
        <div class="dash">
            <span><a href="#">Trang Chủ</a></span>
            <span>/</span>
            <span>Quản Lý Tài Khoản</span>
        </div>
        <form class="section-1">
            <div class="profile-left">
                <div style="display: flex;justify-content: center;">
                    <img src="./Assets/IMG/img-avatar.png" alt="" width="40%">
                </div>
                    
                <div>
                    <p style="text-align: center;font-size: 20px;">Tài Khoản của <span><?=$_SESSION['hoten']?></span> </p>
                    <p style="text-align: center">Chưa biết ghi gì</p>
                    <p style="text-align: center">Chưa biết ghi gì</p>
                </div>
                
            </div>
            <?php
                foreach ($user as $u) {
                        if($u['HoTen'] == ""){
                            $ten = $u['username'];
                        }else{
                            $ten = $u['HoTen'];
                        }
                        if($u['block'] == 0){
                            $block = "Đang hoạt động";
                        }else{
                            $block = "Giới hạn";
                        }
                        echo'
                        <div class="profile-right">
                        <div>
                            <span class="profile-1">Tên:</span>
                            <span class="profile-2">'.$ten.'</span>
                        </div>
                        <hr style="width:96%">
                        <div>
                            <span class="profile-1">Email:</span>
                            <span class="profile-2">'.$u['email'].'</span>
                        </div>
                        <hr style="width:96%;color:rgba(0,0,0,.1);">
                        <div>
                            <span class="profile-1">SĐT:</span>
                            <span class="profile-2">'.$u['sdt'].'</span>
                        </div>
                        <hr style="width:96%">
                        
                        
                        <div>
                            <span class="profile-1">Địa Chỉ:</span>
                            <span class="profile-2">'.$u['diachi'].'</span>
                        </div>
                        <hr style="width:96%">
                        <div>
                            <span class="profile-1">Tình Trạng:</span>
                            <span class="profile-2">'.$block.'</span>
                        </div>
                        <hr style="width:96%">
                        <div>
                            <div style="padding:15px;float:left" >
                            
                                <a href="change_profile"  class="button" > Cập Nhật</a>
                            </div>
                            <div style="padding:15px;float:right">
                            
                                <a href="change_pass"  class="button" > Đổi Mật Khẩu</a>
                            </div>
                        </div>
                    </div>
                      
                      ';

                }
            
            
            
            
            
            
            
            ?>
            
        </form>
        <div id="customer_orders" class="table-bill" style="clear:both">
			
			<table width="100%" style="border-spacing: 0;
            border-collapse: collapse;">
				
					<?php
                        if(isset($dh) && count($dh) > 0){
                            echo '  <thead>
                                        <tr>
                                            <th class="order_number">Mã đơn hàng</th>
                                            <th class="date">Ngày đặt</th>
                                            <th class="payment_status">Trạng thái thanh toán</th>
                                            <th class="total">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                            foreach ($dh as $dh) {
                                if($dh['trangthai'] == 0){
                                    $trangthai = "Chờ Thanh Toán";
                                }else{
                                    $trangthai = "Đã Thanh Toán";
                                }
                                echo '  <tr class="odd cancelled_order">
                                            <td><a href="hd-chitiet&id-hd='.$dh['id'].'" style="color:black">#'.$dh['ma_hd'].'</a></td>
                                            <td><span>'.$dh['ngay'].'</span></td>
                                            <td><span class="status_pending">'.$trangthai.'</span></td>
                                            <td><span class="total money">'.number_format($dh['tongtien']).'₫</span></td>
                                        </tr>';
                            }
                        }
                    ?>
					
					
				</tbody>
			</table>
			
		</div>
    </div>