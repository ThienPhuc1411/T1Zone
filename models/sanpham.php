<?php
function addSp($tensp, $price, $price_sale, $img, $detail, $id_th, $id_dm, $hot, $ngay_nhap, $visible)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,price_sale,price,img,detail,id_th,id_dm,hot,ngay_nhap,visible) VALUES ('" . $tensp . "','" . $price_sale . "','" . $price . "',
        '" . $img . "','" . $detail . "','" . $id_th . "','" . $id_dm . "','" . $hot . "','" . $ngay_nhap . "','" . $visible . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

// function update_soluong($id,$so_luong){
//     $conn = connectdb();
//     $sql = "UPDATE tbl_sanpham SET so_luong = '".$so_luong."' WHERE id=".$id;
//     $stmt = $conn->preapare($sql);
//     $stmt->excute();
// }

function updateSp($tensp, $price_sale, $price, $img, $detail, $id_th, $id_dm, $hot, $id, $ngay_nhap)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_sanpham SET tensp='" . $tensp . "',price_sale ='" . $price_sale . "', price='" . $price . "', img ='" . $img . "', detail = '" . $detail . "', id_th = '" . $id_th . "', id_dm = '" . $id_dm . "', hot = '" . $hot . "', ngay_nhap = '" . $ngay_nhap . "' WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function getOneSp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT tbl_sanpham.*,tbl_danhmuc.tendm as tendm,tbl_thuonghieu.tenth as tenth
        FROM tbl_sanpham JOIN tbl_danhmuc ON tbl_danhmuc.id = tbl_sanpham.id_dm join tbl_thuonghieu on tbl_thuonghieu.id = tbl_sanpham.id_th 
        WHERE tbl_sanpham.id=" . $id);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //mảng chỉ có 1 phần tử
    return $kq;
}

function delSp($id)
{
    $conn = connectdb();
    // sql to delete a record
    $sql = "DELETE FROM tbl_sanpham WHERE id=" . $id;
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_SanPham()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT tbl_sanpham.*,tbl_danhmuc.tendm as tendm,tbl_thuonghieu.tenth as tenth
        FROM tbl_sanpham JOIN tbl_danhmuc ON tbl_danhmuc.id = tbl_sanpham.id_dm join tbl_thuonghieu on tbl_thuonghieu.id = tbl_sanpham.id_th");
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function sanpham_sortPrice($sort)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham order by price " . $sort;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqPrice = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kqPrice;
}

function sanpham_sortName($sort)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham order by tensp " . $sort;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqName = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kqName;
}

function sanpham_sortsell()
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham order by sell desc limit 15";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqSell = $stmt->FetchAll();
    return $kqSell;
}

function sanpham_sortLike()
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham order by yeuthich desc limit 15";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqLike = $stmt->FetchAll();
    return $kqLike;
}

function sanpham_sortHot()
{
    $conn = connectdb();
    $sql = "SELECT * from tbl_sanpham order by Hot desc limit 15";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqHot = $stmt->FetchAll();
    return $kqHot;
}

function getall_Sp($iddm, $idth, $special, $limit)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND id_dm=" . $iddm;
    }
    if ($idth > 0) {
        $sql .= " AND td_th=" . $idth;
    }
    if ($special == 1) {
        $sql .= " order by special desc ";
        if ($limit != 0) {
            $sql .= "limit " . $limit;
        }
    } else {
        $sql .= " order by id desc ";
        if ($limit != 0) {
            $sql .= "limit " . $limit;
        }
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}


function search_sanpham($id_dm, $search)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham where visible = 1 and tensp like '%$search%'";
    if ($id_dm != 0) {
        $sql .= " AND id_dm = '.$id_dm.'";
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function getall_SanPham_site($start,$show)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham where visible = 1 LIMIT $start,$show";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute([$start,$show]);
    // // set the resulting array to associative (giá trị trả về là mảng)
    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    $kq = $conn->query($sql);
    return $kq;
}

function hide_sanpham($id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_sanpham SET visible = 0 WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function show_sanpham($id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_sanpham SET visible = 1 WHERE id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function sort_th($id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham where id_th='.$id.'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function sort_dm($id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham where id_dm='.$id.'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function getall_Sp_site($tendm, $limit,$id_dm)
{
    $conn = connectdb();
    $sql = "SELECT tbl_sanpham.*,tbl_danhmuc.tendm as tendm FROM `tbl_sanpham` JOIN tbl_danhmuc ON tbl_sanpham.id_dm = tbl_danhmuc.id";
    if ($tendm != "") {
        $sql .= " where tendm = '" . $tendm . "'";
    }
    if($id_dm != ""){
        $sql .= " WHERE id_dm='.$id_dm.'";
    }
    if ($limit != 0) {
        $sql .= " limit " . $limit;
    } else {
        $sql .= " limit 8";
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}

function update_view($id, $truycap)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_sanpham SET truycap = '" . $truycap . "' where id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function count_sanpham()
{
    $conn = connectdb();
    $sql = "SELECT count(*) FROM tbl_sanpham where visible = 1";
    $stmt = $conn->query($sql);
    $kq = $stmt->fetch();
    return $kq;
}

function count_thuonghieu($id_th){
    $conn = connectdb();
    $sql = "SELECT count(*) FROM tbl_sanpham where visible = 1 and id_th='.$id_th.'";
    $stmt = $conn->query($sql);
    $kq = $stmt->fetch();
    return $kq;
}

function count_danhmuc($id_dm){
    $conn = connectdb();
    $sql = "SELECT count(*) FROM tbl_sanpham where visible = 1 and id_th='.$id_dm.'";
    $stmt = $conn->query($sql);
    $kq = $stmt->fetch();
    return $kq;
}

function count_search($id_dm,$search){
    $conn = connectdb();
    $sql = "SELECT count(*) FROM `tbl_sanpham` WHERE visible = 1 and tensp LIKE '%$search%'";
    $stmt = $conn->query($sql);
    $kq = $stmt->fetch();
    return $kq;
}

function update_sell($id,$sell){
    $conn = connectdb();
    $sql = "UPDATE tbl_sanpham SET sell = '" . $sell . "' where id=" . $id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function check_Ten($name){
    $conn = connectdb();
    $sql = "SELECT * from tbl_sanpham where tensp = '.$name.'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative (giá trị trả về là mảng)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); //Mảng có nhiều phần tử
    return $kq;
}
?>