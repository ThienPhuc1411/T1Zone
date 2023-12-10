
<form action="get_MK" method="post" style="width: 600px" class="quen_MK">
    <h4 class="mb-3 text-center">
        QUÊN MẬT KHẨU
    </h4>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" style="font-size: 1.2rem;" value="<?=(isset($email) ? $email : "") ?>" name="email" class="form-control"
            id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text" style="color:red;"><?=(isset($thongbao)?$thongbao:"")?></div>
    </div>
    <input type="submit" value="Xác nhận" name="guimail" class="submit">
</form>