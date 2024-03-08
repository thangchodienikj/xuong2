<?php
session_start();

require_once './common/connect-db.php';
require_once './common/helper.php';

require_file('./client/controllers/');
require_file('./client/models/');

$action = $_GET['act'] ?? null;
switch ($action) {
    case 'tkmk':
        tkmk();
        break;
    case 'dangky':
        addlogin($_POST['taikhoan'], $_POST['matkhau'], $_POST['name'], $_POST['diachi'], $_POST['sdt'], $_POST['vaitro']);
        break;
    case 'dangnhap':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            login($_POST['taikhoan'], $_POST['matkhau']);
        }
        break;
    case 'tkcuatoi':
        tkcuatoi();
        break;
    case 'dangxuat':
        logout();
        break;
    case 'capnhat':
        updataTaiKhoan($_POST['id'], $_POST['tk'], $_POST['mk'], $_POST['name'], $_POST['sdt'], $_POST['diachi']);
        break;
    case 'chitietsp':
        themluotxem($_GET['id']);
        chitietsp($_GET['id']);
        break;
    case 'baivietone':
        baiViet($_GET['id']);
        break;
    case 'baiviet':
        trangbaiviet();
        break;
    case 'cuahang':
        cuahang(!empty($_GET['id'])? $_GET['id']:0);
        break;
    case 'timkiemsp':
        timkiemsp($_POST['name']);
        break;
    case 'sanphamyt':
        if (isset($_GET['idsp'])) {
            themsanphamyt($_GET['idsp'], $_GET['idtk']);
        }
        sanphamyt($_GET['idtk']);
        break;
    case 'xoaspyt':
        xoaspyt($_POST['idsp'], $_POST['idtk']);
        break;
    case 'lienhe':
        lienhe($_GET['idsp']);
        break;
    case 'guilienhe':
        addlienhe($_POST['id'],$_POST['trangthai'],$_POST['name'],$_POST['diachi'],$_POST['sdt'],$_POST['editor1']);
        break;
    case 'binhluan':
        thembinhluan($_POST['id'],$_POST['name'],$_POST['binhluan'],$_POST['rating']);
        break;
    default :
        homeClient();
        break;
}

require_once './common/disconnect.php';