<div id="customer_orders" class="table-bill" style="clear:both">
<h3>
    <?php
        if(isset($hd)) {
            echo'<h4 style="text-align:center;padding:20px auto;font-size:30px;font-weight:bold;color:red"> Hóa đơn chi tiết của đơn hàng: #'.$hd[0]['mahd'].' </h4>
            <h3 style="text-align:center;padding:20px 20px;font-size:30px;font-weight:bold;"><a href="profile" >Quay Lại?</a></h3>'
            ;
        }
    
    
    
    ?>



</h3>
<table width="100%" style="border-spacing: 0;
            border-collapse: collapse;">
                                   <thead>
                                        <tr>
                                            
                                            <th class="date">Tên Sản Phẩm</th>
                                            <th class="date">Giá</th>
                                            <th class="date">Số Lượng</th>
                                            <th >Hình</th>
                                            
                                            <th class="total">Tổng tiền</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($hd as $dh) {
                                            
                                        
                                            echo' <tr class="odd cancelled_order">
                                            
                                            <td><span>'.$dh['tensp'].'</span></td>
                                            <td><span>'. number_format($dh['gia'],0,",",".") .'</span></td>
                                            <td><span>'.$dh['so_luong'].'</span></td>
                                            <td style="width:200px;height:200px;"><img src="./Assets/uploads/sanpham/'.$dh['img'].'" alt=""></td>
                                           
                                            <td><span class="total money">'. number_format($dh['gia']*$dh['so_luong'],0,",",".") .'₫</span></td>
                                        </tr>';
                                        }
                                        
                                        
                                        ?>
                                   
                                        <tbody>
</table>

</div>