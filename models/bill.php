<?php
    function themHd($tensp,$Hinhanh,$gia,$iddm,$chuthich,$special){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_hoadon (tensp,Hinhanh,gia,iddm,chuthich,special) VALUES ('".$tensp."','".$Hinhanh."','".$gia."',
        '".$iddm."','".$chuthich."','".$special."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    
    function getall_HoaDon(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_hoadon");
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }
?>