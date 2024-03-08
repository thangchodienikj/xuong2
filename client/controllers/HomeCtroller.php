<?php
function homeClient(){
    $data['posts']=PostsList();
    $data['product']=ProductList(0);
    showViewClient('./client/views/home.php',$data);
}

function tkmk(){
    require_once './client/views/taikhoan/tkmk.php';
}

function tkcuatoi(){
    showViewClient('./client/views/taikhoan/tkcuatoi.php');
}

function themluotxem($id){
    luotxem($id);
}
function cuahang($id){
    $data['listCategory'] = getAllCategory();
    $data['product']=ProductList($id);
    showViewClient('./client/views/sanpham/sanpham.php',$data);
}

function timkiemsp($name){
    $data['listCategory'] = getAllCategory();
    $data['product']= timkiemproduct($name);
    showViewClient('./client/views/sanpham/sanpham.php',$data);
}

