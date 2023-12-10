<?php
    function all_thongke_dm() {
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT tbl_danhmuc.tendm, count(tbl_sanpham.id) as countsp, min(tbl_sanpham.price) as mingia, 
        max(tbl_sanpham.price) as maxgia, avg(tbl_sanpham.price) as avggia FROM tbl_sanpham LEFT JOIN tbl_danhmuc ON tbl_sanpham.id_dm=tbl_danhmuc.id GROUP BY tbl_danhmuc.id");
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function all_thongke_th () {
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT tbl_thuonghieu.tenth, count(tbl_sanpham.id) as countsp, min(tbl_sanpham.price) as mingia, 
        max(tbl_sanpham.price) as maxgia, avg(tbl_sanpham.price) as avggia FROM tbl_sanpham LEFT JOIN tbl_thuonghieu ON tbl_sanpham.id_th=tbl_thuonghieu.id GROUP BY tbl_thuonghieu.id");
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }
?>