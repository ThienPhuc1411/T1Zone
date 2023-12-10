
    <form action="change_profile" method="post">
        <div class="change-container">
          <h1>Thay Đổi Thông Tin</h1>
          <p>Vui lòng điền thông tin vào form để thay đổi.</p>
          <hr>
      
          <label for="user" style="font-size:20px;padding-left:5px"><b>Tên</b></label>
          <input type="text" placeholder="Nhập Tên" name="HoTen" id="user" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($HoTen_error)? $HoTen_error:"")?></span><br>
          <hr>

          <label for="sdt" style="font-size:20px;padding-left:5px"><b>Số Điện Thoại</b></label>
          <input type="text" placeholder="Nhập SĐT" name="sdt" id="sdt" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($sdt_error)? $sdt_error:"")?></span><br>
          <hr>
          <label for="diachi" style="font-size:20px;padding-left:5px"><b>Địa Chỉ</b></label>
          <input type="text" placeholder="Nhập Địa Chỉ" name="diachi" id="diachi" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($diachi_error)? $diachi_error:"")?></span><br>
          <hr>
          <hr>
          
      
          <input type="submit" class="registerbtn" value="Cập Nhật" name="capnhat" style="font-size:20px;">
    </div>
       
      </form>
