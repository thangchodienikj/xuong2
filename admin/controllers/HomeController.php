<?php
function homeAdmin(){
    showViewAdmin('../admin/views/home.php');
}
function logout(){
    session_destroy();
    echo '<script> 
            alert("Đăng xuất thành công")
                window.location.href = "../index.php";
            </script>';
}