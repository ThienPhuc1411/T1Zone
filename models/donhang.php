<?php
    function taodonhang($tongtien,$pttt,$ma_hd,$hinhthuc,$hoten,$diachi,$email,$sdt,$ngay,$id_user){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_hoadon (ma_hd,tongtien,phuongthuc,hinhthuc,ten_nguoi_nhan,diachi_nguoi_nhan,sdt_nguoi_nhan,email,ngay,id_User) 
        VALUES ('".$ma_hd."','".$tongtien."','".$pttt."','".$hinhthuc."','".$hoten."','".$diachi."','".$sdt."','".$email."','".$ngay."','".$id_user."')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }

    function addtocart($id_hd,$id_sp,$price,$soluong){//0 là ID, 1 là tensp, 2 là img, 3 là price, 4 là sl
        $conn = connectdb();
        $sql = "INSERT INTO tbl_hoadonchitiet (id_hd,id_sp,gia,so_luong) 
        VALUES ('".$id_hd."','".$id_sp."','".$price."','".$soluong."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function getDonHang($idhd){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT tbl_hoadonchitiet.*,tbl_hoadon.ma_hd as mahd,tbl_sanpham.tensp as tensp,tbl_sanpham.img as img
         FROM tbl_hoadonchitiet join tbl_hoadon on tbl_hoadonchitiet.id_hd = tbl_hoadon.id 
        join tbl_sanpham on tbl_sanpham.id = tbl_hoadonchitiet.id_sp WHERE tbl_hoadonchitiet.id_hd =".$idhd);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function getThongTin($id_user){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_hoadon WHERE id_user =".$id_user);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function getAll_HoaDon(){
        $conn = connectdb();
        $sql = "SELECT * FROM tbl_hoadon";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative (giá trị trả về là mảng)
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();//Mảng có nhiều phần tử
        return $kq;
    }

    function update_HoaDon($id){
        $conn = connectdb();
        $sql = "UPDATE tbl_hoadon SET duyet = 1 WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
?>