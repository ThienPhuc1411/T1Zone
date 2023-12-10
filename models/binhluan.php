<?php
    function getall_BinhLuan(){
        $conn = connectdb();
        $sql = "SELECT tbl_binhluan.*,tbl_sanpham.tensp as tensp,tbl_user.username as username FROM tbl_binhluan join tbl_sanpham on
        tbl_sanpham.id = tbl_binhluan.id_sp join tbl_user on tbl_user.id = tbl_binhluan.id_user order by tbl_binhluan.id desc";        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function update_BinhLuan($id){
        $conn = connectdb();
        $sql = "UPDATE tbl_binhluan SET visible = 1 WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function show_BinhLuan_Site($id_sp){
        $conn = connectdb();        
        $stmt = $conn->prepare("SELECT tbl_binhluan.*,tbl_sanpham.tensp as tensp,tbl_user.username as username,tbl_user.HoTen as hoten FROM tbl_binhluan join tbl_sanpham on
        tbl_sanpham.id = tbl_binhluan.id_sp join tbl_user on tbl_user.id = tbl_binhluan.id_user where tbl_binhluan.visible = 1 and tbl_binhluan.id_sp=".$id_sp);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    

    function add_BinhLuan($noidung,$id_sp,$id_user,$ngay){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_binhluan (noidung,id_sp,id_user,ngay) VALUES ('".$noidung."','".$id_sp."','".$id_user."','".$ngay."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function del_BinhLuan($id){
        $conn = connectdb();
        // sql to delete a record
        $sql = "DELETE FROM tbl_binhluan WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    
?>