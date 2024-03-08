<?php
function listCategory()
{
    $data['listCategory'] = getAllCategory();
    showViewAdmin('../admin/views/danhmuc/list.php', $data);
}

function addCategory()
{
    showViewAdmin('../admin/views/danhmuc/add.php');
}

function addCategorys($tenDanhMuc)
{
    $error = [];

    if (empty(trim($tenDanhMuc))) {
        $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
    } else {
        if (strlen(trim($tenDanhMuc)) < 5) {
            $error['name']['length'] = 'Tên sản phẩm phải có ít nhất 5 ký tự';
        }
    }

    if (!empty($error)) {
        $_SESSION['error_messages'] = $error;
    } else {
        $check = insertCategorys($tenDanhMuc);
        if (!$check) {
            echo '<script>alert("Thêm sản phẩm thành công");</script>';
        }
    }
}

function deleteCategorys($id)
{
    $check = deleteCategory($id);
    if (!$check) {
        echo '<script>alert("Xóa sản phẩm thành công");</script>';
    }
}

function updateCategorys($id)
{
    $data['updataView'] = $updataView = updateCategory($id);
    $updataView ? showViewAdmin('../admin/views/danhmuc/update.php', $data) : e404();
}

function CategoryViews($id, $tenDanhMuc)
{
    $check = CategorysView($id, $tenDanhMuc);
    if (!$check) {
        echo '<script>alert("Sửa sản phẩm thành công");</script>';
        echo '<script>window.location.href = "/admin/?act=listCategory";</script>';
    }
}

