<?php
function thongke()
{
    showViewAdmin('../admin/views/Thongke/thongke.php');
}
function thongkedh()
{
    $data['thongkedh'] =thongkedhs();
    showViewAdmin('../admin/views/Thongke/thongkedh.php',$data);
}
function thongkesp($tg)
{
    $data['thongkesp'] =thongkesps($tg);
    showViewAdmin('../admin/views/Thongke/thongkesp.php',$data);
}