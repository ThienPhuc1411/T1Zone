<?php
    function themDm($tendm,$uutien){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_danhmuc (tendm,uutien) VALUES ('".$tendm."','".$uutien."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function updateDm($id,$ten,$visible,$uutien){
        $conn = connectdb();
        $sql = "UPDATE tbl_danhmuc SET tendm='".$ten."',visible = '".$visible."', uutien = '".$uutien."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    
    function getOneDm($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//mảng chỉ có 1 phần tử
        return $kq;
    }

    function delDm($id){
        $conn = connectdb();
        // sql to delete a record
        $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function getall_DanhMuc(){
        $conn = connectdb();
        $sql = "SELECT * FROM tbl_danhmuc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function getall_DanhMuc_site(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc where visble = 1");
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function show_danhmuc($id) {
        $conn = connectdb();
        $sql = "UPDATE tbl_danhmuc SET visible = 1 WHERE id=" . $id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function hide_danhmuc($id) {
        $conn = connectdb();
        $sql = "UPDATE tbl_danhmuc SET visible = 0 WHERE id=" . $id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
?>