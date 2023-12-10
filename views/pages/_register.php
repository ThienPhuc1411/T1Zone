<div class="container">
    <form action="register" method="post">
        <div class="change-container">
          <p style="color:red;font-size: 30px;text-align:center"><?=(isset($thongbao)? $thongbao:"")?></p><br>
          <h1 style="padding-left:5px">Đăng Ký</h1>
          <p style="padding-left:5px;font-size:12px;">Vui lòng điền thông tin vào form để đăng ký.</p>
          <label for="user" style="font-size:20px;padding-left:5px"><b>Username</b></label>
          <input type="text" placeholder="Nhập Username" name="username" id="user" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($username_error)? $username_error:"")?></span> <br>
          <label for="user" style="font-size:20px;padding-left:5px"><b>Họ Tên</b></label>
          <input type="text" placeholder="Nhập Họ Tên" name="HoTen" id="user" required style="font-size:15px;">
          <label for="diachi" style="font-size:20px;padding-left:5px"><b>Địa Chỉ</b></label>
          <input type="text" placeholder="Nhập Địa Chỉ" name="diachi" id="diachi" style="font-size:15px;">
          <label for="sdt" style="font-size:20px;padding-left:5px"><b>Số Điện Thoại</b></label>
          <input type="text" placeholder="Nhập SĐT" name="sdt" id="sdt" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($sdt_error)? $sdt_error:"")?></span> <br>
          <label for="email" style="font-size:20px;padding-left:5px"><b>Email</b></label>
          <input type="text" placeholder="Nhập Email" name="email" id="email" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($email_error)?$email_error:"")?></span> <br>
          <label for="psw" style="font-size:20px;padding-left:5px"><b>Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Password" name="psw" id="psw" required style="font-size:15px">
          <span style="color:red;font-size: 14px;"><?=(isset($loiPass)? $loiPass:"")?></span> <br>
          <label for="psw-repeat"style="font-size:20px;padding-left:5px"><b>Nhập Lại Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập lại Password" name="psw-repeat" id="psw-repeat" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($warning)? $warning:"")?></span> <br>
          <input type="submit" class="registerbtn" value="Đăng ký" name="register" style="font-size:20px;">
        </div> 
    </form>
  </div>