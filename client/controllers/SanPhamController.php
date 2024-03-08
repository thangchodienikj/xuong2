<?php
function chitietsp($id){
    $data['binhluan']=binhluan($id);
    $data['listCategory'] = getAllCategory();
    $data['product']=ProductList(0);
    $data['productone']=ProductOne($id);
    showViewClient('./client/views/sanpham/sanphamct.php',$data);
}

function baiViet($id){
    $data['posts']= PostsList();
    $data['postsone']=baivietone($id);
    showViewClient('./client/views/baiviet/baivietct.php',$data);
}

function sanphamyt($idtk){
    $data['spyt'] =listsanphamyt($idtk);
    showViewClient('./client/views/sanpham/spyt.php',$data);
}

function themsanphamyt($idsp,$idtk){
    $check = checkspyt($idsp, $idtk);
    if ($check){
         updatespyt($idsp, $idtk);
    }else {
         insetsanphamyt($idsp, $idtk);
    }
    unset( $_SESSION['spyt_data']);
    $data['spyt'] =  $_SESSION['spyt_data'] = listsanphamyt($idtk);
    showViewClient('./client/views/sanpham/spyt.php',$data);
}
function xoaspyt($idsp,$idtk){
    deletespyt($idsp,$idtk);
    $data['spyt'] =  $_SESSION['spyt_data'] = listsanphamyt($idtk);
    showViewClient('./client/views/sanpham/spyt.php',$data);
}
function thembinhluan($idsp, $taikhoan, $danhgia, $camnhan){
    insertbinhluan ($idsp, $taikhoan, $danhgia, $camnhan);
    $data['binhluan']=binhluan($idsp);
    $data['listCategory'] = getAllCategory();
    $data['product']=ProductList(0);
    $data['productone']=ProductOne($idsp);
    echo '<script>alert("Bình luận của bạn đã được gửi");</script>';
    showViewClient('./client/views/sanpham/sanphamct.php',$data);
}