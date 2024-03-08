<?php
function listPosts()
{
    $data['listPosts'] = getAllPosts();
    showViewAdmin('../admin/views/baiViet/list.php', $data);
}

function addPosts()
{
    showViewAdmin('../admin/views/baiViet/add.php');
}

function addPostss($tieude, $noiDung, $hinhAnh)
{
    $error = [];

    if (empty(trim($noiDung))) {
        $error['error']['noidung'] = 'Không được bỏ trống tên sản phẩm';
    }

    if (empty($_FILES['hinh']['name'])) {
        $hinhAnh = "";
        $error['error']['hinhanh'] = ('Vui lòng chọn Ảnh danh mục.');
    } else {
        if (!isset($_SESSION['imageError'])) {

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
    } else {
        $check = insertPostss($tieude, $noiDung, $hinhAnh);
        if (!$check) {
            echo '<script>alert("Thêm sản phẩm thành công");</script>';
        }
    }
}

function deletePostss($id)
{
    $check = deletePosts($id);
    if (!$check) {
        echo '<script>alert("Xóa sản phẩm thành công");</script>';
    }
}

function updatePostss($id)
{
    $data['updataView'] = $updataView = updatePosts($id);
    $updataView ? showViewAdmin('../admin/views/baiViet/update.php', $data) : e404();
}

function PostsViews($id, $tieuDe, $noiDung, $hinhAnh)
{
    $error = [];

    if (empty(trim($tieuDe))) {
        $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
    }

    if (empty(trim($noiDung))) {
        $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
    }
    $posts = updatePosts($id);
    // Validate ảnh sản phẩm $image
    if (empty($_FILES['hinh']['name'])) {
        $hinhAnh = $posts['hinhAnh'];
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
    } else {
        $check = PostssView($id, $tieuDe, $noiDung, $hinhAnh);
        if (!$check) {
            echo '<script>alert("Sửa sản phẩm thành công");</script>';
            echo '<script>window.location.href = "/admin/?act=listPosts";</script>';
        }
    }
}

