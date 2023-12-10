<?php
session_start();
ob_start();
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] != 0) {
    include "../models/connectdb.php";
    include "../models/danhmuc.php";
    include "../models/thuonghieu.php";
    include "../models/sanpham.php";
    include "../models/taikhoan.php";
    include "../models/binhluan.php";
    include "../models/donhang.php";
    include "../models/donhangchitiet.php";
    include "../models/post.php";
    include "../models/thongke.php";
    include "views/_sidebar.php";
    include "views/_header.php";
    connectdb();
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            //Tài khoản

            //Thêm sửa xóa Sản Phẩm
            case 'san-pham':
                $kq = getall_SanPham();
                include "views/pages/_sanpham.php";
                break;
            case 'them-sanPham':
                $dsdm = getall_DanhMuc();
                $dsth = getall_ThuongHieu();
                include "views/pages/_add-sanpham.php";
                break;
            case 'xoa-San-Pham':
                if (isset($_GET['id']) == true) {
                    $id = $_GET['id'];
                    delSp($id);
                }
                $kq = getall_SanPham();
                include "views/pages/_sanpham.php";
                break;
            case 'add-Sp':
                $dsdm = getall_DanhMuc();
                $dmth = getall_ThuongHieu();
                if (isset($_POST['addSp']) && $_POST['addSp']) {

                    $tensp = $_POST['tensp'];
                    $id_dm = $_POST['id_dm'];
                    $id_th = $_POST['id_th'];
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $detail = $_POST['detail'];
                    $hot = $_POST['hot'];

                    $target_direction = "../Assets/uploads/sanpham/";
                    $img = $_FILES['img']['name'];
                    $visible = $_POST['visible'];
                    $target_file = $target_direction . basename($_FILES['img']['name']);
                    $uploadOk = 1;
                    $check = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $uploadOk = 0;
                    }
                    // $allsp=getall_SanPham();
                    $checkten = check_Ten($tensp);
                    if ($checkten > 0) {
                        $check = 0;
                        $ten_error = "Tên Sp Đã Trùng!";
                        if (strlen($tensp) > 100) {
                            $check = 0;
                            $ten_error = "Tên Sp Không Được Quá 100 Ký Tự!";
                        }
                    }
                    if ($price <= 0) {
                        $check = 0;
                        $price_error = "Giá Không Được Nhở Hơn Bằng 0!";
                        if ($price_sale <= 0) {
                            $check = 0;
                            $price_sale_error = "Giá Sale Không Được Nhở Hơn Bằng 0!";
                            if ($price_sale > $price) {
                                $check = 0;
                                $price_sale_error = "Giá Sale Không Được Lớn Hơn Giá Gốc!";
                            }
                        }
                    }
                    $check_img = getimagesize($_FILES["img"]["tmp_name"]);
                    if ($check_img !== false) {
                        echo "File is an image - " . $check_img["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    if ($_FILES["img"]["size"] > 100000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {
                        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

                    }
                    // move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                }
                if ($check == 1) {
                    addSp($tensp, $price, $price_sale, $img, $detail, $id_th, $id_dm, $hot, $ngay_nhap, $visible);
                    header('location:san-pham');
                } else {
                    include "views/pages/_add-sanpham.php";
                }
                break;
            case 'hide-San-Pham':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    hide_sanpham($id);
                }
                include "views/pages/_sanpham.php";
                break;
            case 'show-San-Pham':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    show_sanpham($id);
                }
                include "views/pages/_sanpham.php";
                break;
            case 'edit-San-Pham':
                $dm = getall_DanhMuc();
                $th = getall_ThuongHieu();
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    $onesp = getOneSp($id);
                }
                include "views/pages/_update-sanpham.php";
                break;
            case 'update-San-Pham':
                if (isset($_POST['update_sp']) && $_POST['update_sp']) {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $id_dm = $_POST['id_dm'];
                    $id_th = $_POST['id_th'];
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $detail = $_POST['detail'];
                    $hot = $_POST['hot'];
                    if (isset($_POST['img']) && $_POST['img']) {
                        $img = $_FILES['img']['name'];
                        $target_direction = "../Assets/uploads/sanpham/";
                        $target_file = $target_direction . basename($_FILES['img']['name']);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                            $uploadOk = 0;
                        }
                        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    }else{
                        $onesp = getOneSp($_POST['id']);
                        $img = $onesp[0]['img'];
                    }
                    
                    updateSp($tensp, $price_sale, $price, $img, $detail, $id_th, $id_dm, $hot, $id, $ngay_nhap);
                }
                $kq = getall_SanPham();
                include "views/pages/_sanpham.php";
                break;
            //Thêm sửa xóa Danh mục
            case 'danh-muc':
                $kq = getall_DanhMuc();
                include "views/pages/_danhmuc.php";
                break;
            case 'xoa-Danh-Muc':
                if (isset($_GET['id']) == true) {
                    $id = $_GET['id'];
                    delDm($id);
                    header('location:danh-Muc');
                }
                break;
            case 'them-danhMuc':
                include "views/pages/_add-danhmuc.php";
                break;
            case 'add-DM':
                if (isset($_POST['addDm']) && $_POST['addDm']) {
                    $tendm = $_POST['tendm'];
                    $uutien = $_POST['uutien'];
                    themDm($tendm, $uutien);
                }
                header('location: danh-muc');
                // include "views/pages/_danhmuc.php"; 
                break;
            case 'edit-Danh-Muc':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    $onedm = getOneDm($id);
                }
                include 'views/pages/_update-danhmuc.php';
                break;
            case 'update-DM':
                if (isset($_POST['update_dm']) && $_POST['update_dm']) {
                    $uutien = $_POST['uutien'];
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    $visible = $_POST['visible'];
                    $tendm_cu = $_POST['tendm_cu'];
                    updateDm($id, $tendm, $visible, $uutien);
                    header('location: danh-Muc');
                }
                break;
            case 'an-danh-muc':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    hide_danhmuc($id);
                    $kq = getall_DanhMuc();
                    include "views/pages/_danhmuc.php";
                }

                break;
            case 'hien-danh-muc':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    show_danhmuc($id);
                    $kq = getall_DanhMuc();
                    include "views/pages/_danhmuc.php";
                }

                break;

            // Thêm sửa xóa Thương hiệu
            case 'thuong-hieu':
                $kq = getall_ThuongHieu();
                include "views/pages/_thuonghieu.php";
                break;
            case 'them-thuongHieu':
                $dsdm = getall_DanhMuc();
                include "views/pages/_add-thuonghieu.php";
                break;
            case 'add-TH':
                $dsdm = getall_DanhMuc();
                if (isset($_POST['addTh']) && $_POST['addTh']) {
                    $tenth = $_POST['tenth'];
                    $id_dm = $_POST['id_dm'];
                    $visible = $_POST['visible'];
                    $target_dir = "../Assets/uploads/logo/";
                    $logo = $_FILES['logo']['name'];
                    $target_file = $target_dir . basename($_FILES['logo']['name']);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);
                    addThuongHieu($tenth, $logo, $id_dm, $visible);
                    header('location:thuong-hieu');
                }
                break;
            case 'xoa-Thuong-Hieu':
                if (isset($_GET['id']) == true) {
                    $id = $_GET['id'];
                    delTh($id);
                    header('location:thuong-hieu');
                }
                break;
            case 'edit-Thuong-Hieu':
                if (isset($_GET['id']) && $_GET['id']) {
                    $kq = getall_DanhMuc();
                    $id = $_GET['id'];
                    $oneth = getone_ThuongHieu($id);
                }
                include "views/pages/_update-thuonghieu.php";
                break;
            case 'update-TH':
                if (isset($_POST['update_th']) && $_POST['update_th']) {
                    $id = $_POST['id'];
                    $tenth = $_POST['tenth'];
                    $id_dm = $_POST['id_dm'];
                    $visible = $_POST['visible'];
                    $target_direction = "../Assets/uploads/logo";
                    $logo = $_FILES['logo']['name'];
                    $target_file = $target_direction . basename($_FILES['logo']['name']);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);
                    updateThuongHieu($id, $tenth, $logo, $visible, $id_dm);
                    header('location:thuong-hieu');
                }
                break;

            case 'show-Thuong-Hieu':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    show_ThuongHieu($id);
                    header('location:thuong-hieu');
                }
                break;

            case 'hide-Thuong-Hieu':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    hide_ThuongHieu($id);
                    header('location:thuong-hieu');
                }
                break;

            //QUản lý bình luận 
            case 'binh-luan':
                $kq = getall_BinhLuan();
                include "views/pages/_binhluan.php";
                break;
            case 'update_BinhLuan':
                if (isset($_GET['id'])) { //Kiểm tra xem id có tồn tại hay ko
                    $id = $_GET['id'];
                    update_BinhLuan($id);
                    header('location:binh-luan');
                }

                break;
            case 'xoa_BL':
                if ($_GET['id']) {
                    $id = $_GET['id'];
                    del_BinhLuan($id);
                    header('location:binh-luan');
                }
                break;

            //Quản Lý Tin Tức
            case 'post':
                $kq = get_all_post();
                include "views/pages/_post.php";
                break;
            case 'add_post':
                include 'views/pages/_add_post.php';
                break;
            case 'add-post':
                if (isset($_POST['addPost']) && $_POST['addPost']) {
                    $ten_post = $_POST['ten_post'];
                    $id_User = $_POST['id_User'];
                    $noi_dung = $_POST['noi_dung'];
                    $noidung_ngan = $_POST['noidung_ngan'];
                    $img = $_FILES['img']['name'];
                    $target_direction = "../Assets/uploads/post/";
                    $target_file = $target_direction . basename($_FILES['img']['name']);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    addpost($ten_post, $noi_dung, $id_User, $img, $noidung_ngan);
                    header('location:post');
                }
                break;
            case 'show-post':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    show_post($id);
                    header('location:post');
                }
                break;
            case 'hide-post':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    hide_post($id);
                    header('location:post');
                }
                break;
            case 'del-post':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    del_post($id);
                    header('location:post');
                }
                break;
            case 'cap-nhat-post':
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    $onePost = get_one_post($id);
                }
                include "views/pages/_update-post.php";
                break;
            case 'update_post':
                if (isset($_POST['UpdatePost']) && $_POST['UpdatePost']) {
                    $ten_post = $_POST['ten_post'];
                    $id = $_POST['id'];
                    $noi_dung = $_POST['noi_dung'];
                    $noidung_ngan = $_POST['noidung_ngan'];
                    $img = $_FILES['img']['name'];
                    $target_direction = "../Assets/uploads/sanpham/";
                    $target_file = $target_direction . basename($_FILES['img']['name']);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    update_post($ten_post, $noi_dung, $img, $noidung_ngan, $id);
                    header('location:post');
                }
                break;
            //Quản lý tài khoản
            case 'tai-khoan':
                $kq = getall_User();
                include "views/pages/_taikhoan.php";
                break;
            case 'xoa-Tai-Khoan':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delUser($id);
                }
                $kq = getall_User();
                include "views/pages/_taikhoan.php";
                break;
            case 'block_acc':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    block_acc($id);
                    header('location:tai-khoan');
                }
                break;
            case 'unblock_acc':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    unblock_acc($id);
                    header('location:tai-khoan');
                }

                break;
            case 'limited':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    limited_acc($id);
                    header('location:tai-khoan');
                }
                break;
            case 'unlimited':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    unlimited_acc($id);
                    header('location:tai-khoan');
                }
                break;

            //QUản lý đơn hàng & đơn hàng chi tiết 
            case 'don-hang':
                $kq = getall_HoaDon();
                include "views/pages/_donhang.php";
                break;
            case 'donhangchitiet':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $hdct = getDonHang($id);
                    include "views/pages/_chitietdonhang.php";
                }
                break;
            case 'update_DonHang':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    update_HoaDon($id);
                }
                $kq = getall_HoaDon();
                include "views/pages/_donhang.php";
                break;
            case 'thongke':
                $listdm = all_thongke_dm();
                $listth = all_thongke_th();
                include "views/pages/_thongke.php";
                break;
            //Logout 
            case 'logout':
                unset($_SESSION['vaitro']);
                unset($_SESSION['username']);
                unset($_SESSION['hoten']);
                unset($_SESSION['id']);
                header('location: ../index.php');
                break;
            default:
                include "views/pages/_thongke.php";
                break;
        }
        ;
    }
    include "views/_footer.php";
} else {
    header('location:../index.php');
}

?>