<?php
    // function addThuongHieu($tenth,$logo,$id_dm,$visible){
    //     $conn = connectdb();
    //     $sql = "INSERT INTO tbl_thuonghieu (tenth,logo,id_dm,visible) VALUES ('".$tenth."','".$logo."','".$id_dm."'.'".$visible."')";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }

    function addThuongHieu($tenth,$logo,$id_dm,$visible){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_thuonghieu (tenth,logo,id_dm,visible) VALUES ('".$tenth."','".$logo."','".$id_dm."','".$visible."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function updateThuongHieu($id,$tenth,$logo,$visible,$id_dm){
        $conn = connectdb();
        $sql = "UPDATE tbl_thuonghieu SET tenth='".$tenth."',logo = '".$logo."',visible = '".$visible."',id_dm = '".$id_dm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    
    function getall_ThuongHieu_site(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_thuonghieu where visble = 1");
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }
    
    function delTh($id){
        $conn = connectdb();
        // sql to delete a record
        $sql = "DELETE FROM tbl_thuonghieu WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function getone_ThuongHieu($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_thuonghieu where id=".$id);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $oneth = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $oneth;
    }

    function getall_ThuongHieu(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT tbl_thuonghieu.*,tbl_danhmuc.tendm as tendm FROM tbl_thuonghieu join tbl_danhmuc on tbl_thuonghieu.id_dm = tbl_danhmuc.id");
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function hide_ThuongHieu($id){
        $conn = connectdb();
        $sql = "UPDATE tbl_thuonghieu SET visible = 0 WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function show_ThuongHieu($id){
        $conn = connectdb();
        $sql = "UPDATE tbl_thuonghieu SET visible = 1 WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
?>