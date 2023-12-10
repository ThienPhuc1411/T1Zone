<?php
function checkUser($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' and pass='" . $pass . "'");
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    if (count($kq) > 0) {
        return $kq[0]['vaitro'];
    } else {
        return 0;
    }

}

function checkPass($id, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT pass FROM tbl_user WHERE id='" . $id . "' and pass='" . $pass . "'");
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    if (count($kq) > 0) {
        return 1;
    } else {
        return 0;
    }
}

function getUserInfo($username, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username='" . $username . "' and pass='" . $pass . "'");
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    if (count($kq) != 0) {
        return $kq;
    } else {
        return 0;
    }
}

// function getall_SanPham(){
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT tbl_sanpham.id,tensp,img,price,tendm FROM tbl_sanpham JOIN tbl_danhmuc ON tbl_danhmuc.id=tbl_sanpham.iddm");
//     $stmt->execute();
//     // set the resulting array to associative (giá trị trả về là mảng)
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
//     return $kq;
// }

function check_mail($email)
{
    $conn = connectdb();
    $sql = "SELECT * FROM `tbl_user` WHERE email= ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    if (count($kq) > 0) {
        return 1;
    } else {
        return 0;
    }
}
?>