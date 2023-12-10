<?php
    function getall_hdct($idhd){
        $conn = connectdb();
        $sql = "SELECT tbl_hoadonchitiet.*,tbl_hoadon.madh FROM tbl_hoadonchitiet join tbl_hoadon on tbl_hoadonchitiet.idhd = tbl_hoadon.id
        where tbl_hoadon.id=".$idhd;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//mảng chỉ có 1 phần tử
        return $kq;
    }
?>