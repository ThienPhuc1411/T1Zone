<?php
function get_all_post_site()
{
    $conn = connectdb();
    $sql = "SELECT tbl_post.*,CONCAT(DAY(tbl_post.ngay),' - ',MONTH(tbl_post.ngay),' - ',YEAR(tbl_post.ngay)) as ngay_nhap,tbl_user.username as username 
    FROM tbl_post join tbl_user on tbl_user.id = tbl_post.id_user where tbl_post.visible = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function get_3_post_site($id)
{
    $conn = connectdb();
    $sql = "SELECT tbl_post.*,CONCAT(DAY(tbl_post.ngay),' - ',MONTH(tbl_post.ngay),' - ',YEAR(tbl_post.ngay)) as ngay_nhap,tbl_user.username as username 
    FROM tbl_post join tbl_user on tbl_user.id = tbl_post.id_user where tbl_post.visible = 1 and tbl_post.id <>".$id  ;
    $sql.=" order by tbl_post.id desc LIMIT 3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function get_one_post($id)
{
    $conn = connectdb();
    $sql = "SELECT tbl_post.*,CONCAT(DAY(tbl_post.ngay),' - ',MONTH(tbl_post.ngay),' - ',YEAR(tbl_post.ngay)) as ngay_nhap,tbl_user.username as username
     FROM tbl_post join tbl_user on tbl_post.id_user = tbl_user.id WHERE tbl_post.id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function get_all_post()
{
    $conn = connectdb();
    $sql = "SELECT tbl_post.*,CONCAT(DAY(tbl_post.ngay),' - ',MONTH(tbl_post.ngay),' - ',YEAR(tbl_post.ngay)) as ngay_nhap,
    tbl_user.username as username FROM tbl_post join tbl_user on tbl_post.id_user = tbl_user.id order by tbl_post.id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function show_post($id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_post SET visible = 1 where id=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function hide_post($id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_post SET visible = 0 where id=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function update_view_post($id, $view)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_post SET view = '.$view.' where id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function addpost($ten_post, $noi_dung, $id_user, $img, $noidung_ngan)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_post(ten_post,noi_dung,id_user,img,noidung_ngan,ngay) VALUES ('".$ten_post."','".$noi_dung."','".$id_user."','".$img."','".$noidung_ngan."',CURDATE())";
    $conn->exec($sql);
}

function update_post($ten_post, $noi_dung, $img, $noidung_ngan, $id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_post SET ten_post = '".$ten_post."', noi_dung = '".$noi_dung."',img = '".$img."', noidung_ngan = '".$noidung_ngan."' 
    WHERE id=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function del_post($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tbl_post WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}

?>