<?php
session_start();

require_once '../common/connect-db.php';
require_once '../common/helper.php';

require_file('../admin/controllers/');
require_file('../admin/models/');

$action = $_GET['act'] ?? null;
switch ($action) {
    case 'listCategory':
        listCategory();
        break;
    case 'addCategory':
        if (isset($_POST['themmoi'])) {
           addCategorys($_POST['tendanhmuc']);
        }
        addCategory();
        break;
    case 'deleteCategory' :
        deleteCategorys($_GET['id']);
        listCategory();
        break;
    case 'updateCategory' :
        updateCategorys($_GET['id']);
        break;
    case 'updateViewsCategory' :
        if (isset($_POST['productView'])) {
            CategoryViews($_POST['id'],$_POST['tendanhmuc']);
        }
        break;
    case 'listProduct':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            listProduct($_POST['kyw'],$_POST['iddm']);
        }else {
            listProduct('', 0);
        }
        break;
    case 'addProduct':
        if (isset($_POST['themmoi'])) {
            addProducts($_POST['tensp'],$_POST['soluong'],$_POST['giasp'],$_FILES['hinh'],$_POST['editor1'],$_POST['iddm'],$_POST['trangthai']);
        }
        addProduct();
        break;
    case 'deleteProduct' :
        deleteProducts($_GET['id']);
        listProduct('',0);
        break;
    case 'updateProduct' :
        updateProducts($_GET['id']);
        break;
    case 'updateViewsProduct':
        if (isset($_POST['capnhat'])) {
            procudtViews($_POST['id'],$_POST['tensp'],$_POST['soluong'],$_POST['giasp'],$_FILES['hinh'],$_POST['editor1'],$_POST['iddm'],$_POST['trangthai']);
        }
        break;
    case 'listImage':
        listImage();
        break;
    case 'addImages':
        if (isset($_POST['themmoi'])) {
            addImage($_POST['id'],$_FILES['hinh']);
        }
        addImages();
            break;
    case 'deleteImage' :
        deleteImages($_GET['id']);
        listImage();
        break;
    case 'addPosts' :
        if (isset($_POST['themmoi'])) {
            addPostss($_POST['tieude'],$_POST['editor1'],$_FILES['hinh']);
        }
        addPosts();
        break;
    case 'listPosts':
        listPosts();
        break;
    case 'deletePosts':
        deletePostss($_GET['id']);
        listPosts();
        break;
    case 'updatePosts':
        updatePostss($_GET['id']);
        break;
    case 'updateViewsPosts':
        if (isset($_POST['themmoi'])) {
            PostsViews($_POST['id'],$_POST['tieude'],$_POST['editor1'],$_FILES['hinh']);
        }
        break;
    case 'dangxuat':
        logout();
        break;
    case 'donhang':
        alldonthue();
        break;
    case 'tinhtrangsp':
        updatetrangthaisp($_POST['id'],$_POST['tinhtrangsp']);
        listProduct('',0);
        break;
    case 'tinhtrangdh':
        updatetrangthaidh($_POST['id'],$_POST['tinhtrangdh']);
        alldonthue();
        break;
    case 'thongke':
        thongke();
        break;
    case 'thongkedh':
        thongkedh();
        break;
    case 'thongkesp':
        thongkesp(!empty($_POST['tg'])? $_POST['tg']:0);
        break;
    case 'binhluan':
        binhluan();
        break;
    case 'chitietsanpham':
        listProductchitiet('', 0);
        break;
    case 'import':
        impost();
        break;
    case 'export':
        export();
        break;
    default :
        homeAdmin();
        break;
}

require_once '../common/disconnect.php';