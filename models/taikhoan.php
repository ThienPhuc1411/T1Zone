<?php
function addUser($username, $pass, $hoten, $email, $sdt, $diachi)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_user (username,pass,hoten,email,sdt,diachi) VALUES 
        ('" . $username . "','" . $pass . "','" . $hoten . "','" . $email . "','" . $sdt . "','" . $diachi . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function updateUser($id, $username, $pass, $hoten, $email, $sdt, $diachi, $vaitro)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET username = '" . $username . "',pass = '" . $pass . "', hoten = '" . $hoten . "',
        email = '" . $email . "', sdt = '" . $sdt . "', diachi = '" . $diachi . "', vaitro = '" . $vaitro . "' WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function updateBlock($id){
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET block = 0 WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function updateUser_KH($id, $username, $diachi, $sdt)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET sdt='" . $sdt . "', username ='" . $username . "',diachi='" . $diachi . "' WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function updatePass($newpass, $id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET pass='" . $newpass . "' WHERE id=" . $id;
    $conn->exec($sql);
}

function updatePass_lost($newpass, $email)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET pass=? WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$newpass, $email]);
}

function block_acc($id){
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET block = 1 where id = ".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function unblock_acc($id){
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET block = 0 where id = ".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function limited_acc($id){
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET gioihan = 1 where id = ".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function unlimited_acc($id){
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET gioihan = 0 where id = ".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}


function getOneUser($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id=" . $id);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //mảng chỉ có 1 phần tử
    return $kq;
}

function delUser($id)
{
    $conn = connectdb();
    // sql to delete a record
    $sql = "DELETE FROM tbl_user WHERE id=" . $id;
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_User()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function themUserCustomer($hoten, $diachi, $email, $username, $pass, $sdt)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_user (hoten,diachi,email,username,pass,sdt,vaitro,block) VALUES 
        ('" . $hoten . "','" . $diachi . "','" . $email . "','" . $username . "','" . $pass . "','" . $sdt . "',1)";
    // use exec() because no results are returned
    $conn->exec($sql); 
    $last_id = $conn->lastInsertId();
    return $last_id;
}

// function checkDangKy($user){
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user=".$user);
//     $stmt->execute();
//     // set the resulting array to associative (giá trị trả về là mảng)
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $count = $stmt->rowCount();
//     echo json_encode(['count=>$count']);
// }

function guiMail_pass($email,$newPass)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com'; //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 't1zone.fpt@gmail.com'; // SMTP username
        $mail->Password = 'moxjugtajawulgnf'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // encryption TLS/SSL 
        $mail->Port = 465; // port to connect to                
        $mail->setFrom('t1zone.fpt@gmail.com', 'T1Zone');
        $mail->addAddress($email);
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Cập nhật mật khẩu mới';
        $noidungthu = "<p>Mật khẩu của bạn đã được cập nhật mới. Mật khẩu: {$newPass} </p>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(
            array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            )
        );
        $mail->send();
        // echo 'Đã gửi mail xong';
        $notice = "Đã gửi mail xong";
        return $notice;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
    
}

function guiMail_dangky($email,$id_register)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com'; //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 't1zone.fpt@gmail.com'; // SMTP username
        $mail->Password = 'moxjugtajawulgnf'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // encryption TLS/SSL 
        $mail->Port = 465; // port to connect to                
        $mail->setFrom('t1zone.fpt@gmail.com', 'T1Zone');
        $mail->addAddress($email);
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Đăng ký tài khoản';
        $noidungthu = "<p>Bạn đã đăng ký tài khoản thành công!</p>
                        <p>Vui lòng xác nhận đăng nhập <a href="/">tại đây</a></p>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(
            array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            )
        );
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}
?>