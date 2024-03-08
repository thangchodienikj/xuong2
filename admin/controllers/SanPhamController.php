<?php
function listProduct($kyw,$iddm)
{
    $data['listCategory'] = getAllCategory();
    $data['listProduct'] = getAllProduct($kyw,$iddm);
    showViewAdmin('../admin/views/sanpham/listSanPham.php', $data);
}
function impost()
{
    showViewAdmin('../admin/views/sanpham/import.php');
}
function export()
{
    showViewAdmin('../admin/views/sanpham/export.php');
}
function listProductchitiet($kyw,$iddm)
{
    $data['listProduct'] = getAllProduct($kyw,$iddm);
    showViewAdmin('../admin/views/sanpham/chitietsanpham.php', $data);
}
function addProduct()
{
    $data['listCategory'] = getAllCategory();
    showViewAdmin('../admin/views/sanpham/addSanPham.php', $data);
}
function addProducts($ten,$soLuong,$gia,$hinhAnh,$moTa,$idDanhMuc,$trangThai){
    $error = [];

    if (empty(trim($ten))) {
        $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
    } else {
        if (strlen(trim($ten)) < 5) {
            $error['name']['length'] = 'Tên sản phẩm phải có ít nhất 5 ký tự';
        }
    }

    if (empty(trim($moTa))) {
        $error['describe']['required'] = 'Không được bỏ trống tên sản phẩm';
    }

    if (empty($gia)) {
        $error['price']['required'] = 'Không được bỏ trống giá tiền';
    } else {
        if (!is_numeric($gia) || $gia <= 0 || floor($gia) != $gia) {
            $error['price']['invalid'] = 'Giá tiền phải là số nguyên dương';
        }
    }

    if (empty($_FILES['hinh']['name'])) {
        $hinhAnh = "";
        $error['image']['required'] = ('Vui lòng chọn Ảnh danh mục.');
    } else {
        if (!isset($_SESSION['imageError'])) {
            // thư mục sẽ được lưu ảnh vào thư mục image
            $targettOir = "../assets/images/";
            // đường dẫn đến file được lưu
            $targetFile = $targettOir . $_FILES['hinh']['name'];
            // tiếng hành upload file ảnh
            if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                $hinhAnh = $targetFile;
            }
        }
    }

    if (!empty($error)) {
        $_SESSION['error_messages'] = $error;
    }else{
        $check = insertProducts($ten,$soLuong,$gia,$hinhAnh,$moTa,$idDanhMuc,$trangThai);
        if (!$check) {
            echo '<script>alert("Thêm sản phẩm thành công");</script>';
        }
    }
}

function deleteProducts($id){
    $check = deleteProduct($id);
    if (!$check) {
        echo '<script>alert("Xóa sản phẩm thành công");</script>';
    }
}

function updateProducts($id){
    $data['listCategory'] =  getAllCategory();
    $data['updataView'] = $updataView =  updateProduct($id);
    $updataView ? showViewAdmin('../admin/views/sanpham/update.php', $data) : e404();
}

function procudtViews($id,$ten,$soLuong,$gia,$hinhAnh,$moTa,$idDanhMuc,$trangThai){

    $error = [];

    if (empty(trim($ten))) {
        $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
    } else {
        if (strlen(trim($ten)) < 5) {
            $error['name']['length'] = 'Tên sản phẩm phải có ít nhất 5 ký tự';
        }
    }

    if (empty($soLuong)) {
        $error['price']['required'] = 'Không được bỏ trống giá tiền';
    } else {
        if (!is_numeric($soLuong) || $soLuong <= 0 || floor($soLuong) != $soLuong) {
            $error['price']['invalid'] = 'Giá tiền phải là số nguyên dương';
        }
    }

    if (empty($gia)) {
        $error['price']['required'] = 'Không được bỏ trống giá tiền';
    } else {
        if (!is_numeric($gia) || $gia <= 0 || floor($gia) != $gia) {
            $error['price']['invalid'] = 'Giá tiền phải là số nguyên dương';
        }
    }
    $product = updateProduct($id);
    if (empty($_FILES['hinh']['name'])) {
        $hinhAnh = $product['hinhAnh'];
    } else {
        if (!isset($_SESSION['imageError'])) {
            // thư mục sẽ được lưu ảnh vào thư mục image
            $targettOir = "../assets/images/";
            // đường dẫn đến file được lưu
            $targetFile = $targettOir . $_FILES['hinh']['name'];
            // tiếng hành upload file ảnh
            if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                $hinhAnh = $targetFile;
            }
        }
    }

    if (empty($idDanhMuc)) {
        $error['id_category']['required'] = 'Không được bỏ trống danh mục sản phẩm';
    }

    if (!empty($error)) {
        $_SESSION['error_messages'] = $error;
    }else{
        $check = productsView($id, $ten, $soLuong, $gia, $hinhAnh, $moTa, $idDanhMuc, $trangThai);
        if (!$check) {
            echo '<script>alert("Sửa sản phẩm thành công");</script>';
            echo '<script>window.location.href = "/admin/?act=listProduct";</script>';
        }
    }
}

function listImage()
{
    $data['listImage'] = getAllImage();
    showViewAdmin('../admin/views/sanpham/listAnhPhu.php', $data);
}
function addImage($idSP, $hinhAnh)
{
    if (empty($_FILES['hinh']['name'])) {
        $hinhAnh = "";
        $error['name']['hinhanh'] = ( 'Vui lòng chọn Ảnh danh mục.');
    } else {
        if (!isset($_SESSION['imageError'])) {
            // thư mục sẽ được lưu ảnh vào thư mục image
            $targettOir = "../assets/images/";
            // đường dẫn đến file được lưu
            $targetFile = $targettOir . $_FILES['hinh']['name'];
            // tiếng hành upload file ảnh
            if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                $hinhAnh = $targetFile;
            }
        }
    }
    if (!empty($error)) {
        $_SESSION['error_messages'] = $error;
    }else{
        $check =   insertImages($idSP, $hinhAnh);
        if (!$check) {
            echo '<script>alert("Thêm ảnh thành công");</script>';
            echo '<script>window.location.href = "/admin/?act=addImages";</script>';
        }
    }
}
function addImages()
{
    $data['Product'] =getAllProduct('',0);
    showViewAdmin('../admin/views/sanpham/addAnhPhu.php', $data);
}

function deleteImages($id){
    $check = deleteImage($id);
    if (!$check) {
        echo '<script>alert("Xóa ảnh phụ thành công");</script>';
    }
}
function updatetrangthaisp($id,$trangThai){
    trangthaisp($id, $trangThai);
}
function binhluan(){
    $data['binhluan']=listbinhluan();
    showViewAdmin('../admin/views/sanpham/binhluan.php', $data);
}