<?php
function alldonthue(){
    $data['donthue']=donthue();
    showViewAdmin('../admin/views/DonHang/DonHang.php', $data);
}

function updatetrangthaidh($id,$trangThai){
    trangthaidh($id, $trangThai);
}

