<?php
function lienhe($id){
    $data['lienhe']= lienhesp($id);
    showViewClient('./client/views/sanpham/lienhe.php',$data);
}
function addlienhe($idSP, $trangThai, $ten, $diaChi, $sdt, $ghiChu) {
    $check = checklienhe($idSP, $sdt);
    $soluong = $check[0]['sl'];

    if ($soluong < 2 ) {
        insertlienhe($idSP, $trangThai, $ten, $diaChi, $sdt, $ghiChu);
        showViewClient('./client/views/sanpham/checkout.php');
    } else {
        showViewClient('./client/views/sanpham/404.php');
    }
}


