<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        
        * {
          box-sizing: border-box;
        }
        
        /* Add padding to containers */
        .change-container {
            margin:0 auto;
            width:75%;
          padding: 16px;
          background-color: #e9ecef;
        }
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }
        
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        
        /* Overwrite default styles of hr */
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
        
        /* Set a style for the submit button */
        .registerbtn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        
        .registerbtn:hover {
          opacity: 1;
        }
        
        /* Add a blue text color to links */
        a {
          color: dodgerblue;
        }
        
        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
          background-color: #f1f1f1;
          text-align: center;
        }
        </style>
</head>
<body>
    <form action="change_pass" method="post">
        <div class="container">
          <h1 style="padding-left:5px">Đổi Mật Khẩu</h1>
          <p style="font-size:15px;padding-left:5px">Vui lòng điền thông tin vào form để đổi mật khẩu.</p>
          <hr>
          <label for="psw" style="font-size:20px;padding-left:5px"><b>Mật Khẩu Cũ</b></label>
          <input type="password" placeholder="Nhập Password Cũ" name="psw-old" id="psw" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($loiPass)? $loiPass:"")?></span><br>
          <hr>
          <label for="psw" style="font-size:20px;padding-left:5px"><b>Mật Khẩu Mới</b></label>
          <input type="password" placeholder="Nhập Password Mới" name="psw" id="psw" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($loiPassNew)? $loiPassNew:"")?></span><br>
          <hr>
          <label for="psw-repeat"style="font-size:20px;padding-left:5px"><b>Nhập Lại Mật Khẩu Mới</b></label>
          <input type="password" placeholder="Nhập lại Password Mới" name="psw-repeat" id="psw-repeat" required style="font-size:15px;">
          <span style="color:red;font-size: 14px;"><?=(isset($warning)? $warning:"")?></span><br>
          
      
          
          <hr>
          <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
      
          <input type="submit" class="registerbtn" value="Cập Nhật" name="capnhat" style="font-size:20px;">
        </div>
      </form>
</body>
</html>