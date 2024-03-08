<?php
function login($taikhoan, $matKhau)
{
    if (empty($taikhoan)) {
        $_SESSION['error']['taikhoan'] = 'Vui lòng nhập tài khoản';
    }
    if (empty($matKhau)) {
        $_SESSION['error']['matkhau'] = 'Vui lòng nhập mật khẩu';
    }

    if (!isset($_SESSION['error'])) {
        $check = checkLogin($taikhoan, $matKhau);
        if (!$check) {
            echo '<script> 
            alert("Tài khoản hoặc mật khẩu không đúng")
            window.location.href = "?act=tkmk"
            </script>';
        } else if (is_array($check)) {
            $_SESSION['userxuong'] = $check;
            if ($_SESSION['userxuong']['vaiTro'] == 0) {
                echo '<script> 
                alert("Đăng nhập thành công")
                 window.location.href = "admin/index.php";
                </script>';
            } else {
                $_SESSION['spyt_data'] = listsanphamyt($_SESSION['userxuong']['id']);
                echo '<script> 
            alert("Đăng nhập thành công")
                window.location.href = "index.php";
            </script>';
            }
        }
    } else {
        echo '<script>
            alert("Không đuợc để trống")
            window.location.href = "/?act=tkmk"
            </script>';
    }

}
function logout(){
    session_destroy();
    echo '<script> 
            alert("Đăng xuất thành công")
                window.location.href = "index.php";
            </script>';
}

function updataTaiKhoan($id,$taiKhoan,$matKhau,$ten,$sdt,$diaChi){
    updateLogin($id,$taiKhoan,$matKhau,$ten,$sdt,$diaChi);
    $check = checkLogin($taiKhoan, $matKhau);
    $_SESSION['userxuong'] = $check ;
    echo '<script> 
            alert("Cập nhật thành công")
                window.location.href = "index.php";
            </script>';
}

function addlogin($taiKhoan,$matKhau,$ten,$diaChi,$sdt,$vaiTro){

    if (empty($ten)) {
        $_SESSION['error']['name'] = 'Vui lòng nhập tên';
    }
    if (empty($diaChi)) {
        $_SESSION['error']['diachi'] = 'Vui lòng nhập Địa chỉ';
    }
    if (empty($sdt)) {
        $_SESSION['error']['sdt'] = 'Vui lòng nhập số điện thoại';
    }
    if (empty($taiKhoan)) {
        $_SESSION['error']['taikhoan1'] = 'Vui lòng nhập tài khoản';
    }
    if (empty($matKhau)) {
        $_SESSION['error']['matkhau1'] = 'Vui lòng nhập mật khẩu';
    }
    if (!empty($_SESSION['error'])) {
        echo '<script>alert("Đăng ký không thành công");</script>';
        echo '<script>window.location.href = "/?act=tkmk";</script>';
    }else{
        $check = insertLogin($taiKhoan,$matKhau,$ten,$diaChi,$sdt,$vaiTro);
        if (!$check) {
            echo '<script>alert("Đăng ký thành công");</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    }

}

