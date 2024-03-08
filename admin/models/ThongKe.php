<?php
function thongkesps($tg)
{
    try {
        if ($tg == 0) {
            $sql = " SELECT sp.ten,
                       sp.luotxem,
                       SUM(DISTINCT sp.luotthue) as luotthue,
                       COUNT(bl.idsp) AS binhluan,
                       sp.gia * sp.luotthue AS danhthu
                FROM sanpham sp
                LEFT JOIN binhluan bl ON bl.idsp = sp.id
                LEFT JOIN donthue dt ON dt.idSP = sp.id
                GROUP BY sp.ten, sp.luotxem, sp.luotthue, sp.gia * sp.luotthue
                ORDER BY luotthue DESC, luotxem DESC, binhluan DESC;
        ";
        } else if ($tg == 1) {
            $sql = " SELECT sp.ten,
                       sp.luotxem,
                       SUM(DISTINCT sp.luotthue) as luotthue,
                       COUNT(bl.idsp) AS binhluan,
                       sp.gia * sp.luotthue AS danhthu
                FROM sanpham sp
                LEFT JOIN binhluan bl ON bl.idsp = sp.id
                LEFT JOIN donthue dt ON dt.idSP = sp.id
                WHERE dt.ngayThue BETWEEN DATE_SUB(NOW(), INTERVAL 1 WEEK) AND NOW()
                GROUP BY sp.ten, sp.luotxem, sp.luotthue, sp.gia * sp.luotthue
                ORDER BY luotthue DESC, luotxem DESC, binhluan DESC
        ";
        } else if ($tg == 2) {
            $sql = " SELECT sp.ten,
                       sp.luotxem,
                       SUM(DISTINCT sp.luotthue) as luotthue,
                       COUNT(bl.idsp) AS binhluan,
                       sp.gia * sp.luotthue AS danhthu
                FROM sanpham sp
                LEFT JOIN binhluan bl ON bl.idsp = sp.id
                LEFT JOIN donthue dt ON dt.idSP = sp.id
                WHERE dt.ngayThue BETWEEN DATE_SUB(NOW(), INTERVAL 1 MONTH) AND NOW()
                GROUP BY sp.ten, sp.luotxem, sp.luotthue, sp.gia * sp.luotthue
                ORDER BY luotthue DESC, luotxem DESC, binhluan DESC
        ";
        } else if ($tg == 3) {
            $sql = " SELECT sp.ten,
                       sp.luotxem,
                       SUM(DISTINCT sp.luotthue) as luotthue,
                       COUNT(bl.idsp) AS binhluan,
                       sp.gia * sp.luotthue AS danhthu
                FROM sanpham sp
                LEFT JOIN binhluan bl ON bl.idsp = sp.id
                LEFT JOIN donthue dt ON dt.idSP = sp.id
                WHERE dt.ngayThue BETWEEN DATE_SUB(NOW(), INTERVAL 1 MONTH) AND NOW()
                GROUP BY sp.ten, sp.luotxem, sp.luotthue, sp.gia * sp.luotthue
                ORDER BY luotthue DESC, luotxem DESC, binhluan DESC
        ";
        } else if ($tg == 4) {
            $sql = " SELECT sp.ten,
                       sp.luotxem,
                       SUM(DISTINCT sp.luotthue) as luotthue,
                       COUNT(bl.idsp) AS binhluan,
                       sp.gia * sp.luotthue AS danhthu
                FROM sanpham sp
                LEFT JOIN binhluan bl ON bl.idsp = sp.id
                LEFT JOIN donthue dt ON dt.idSP = sp.id
                WHERE dt.ngayThue BETWEEN DATE_SUB(NOW(), INTERVAL 1 YEAR) AND NOW()
                GROUP BY sp.ten, sp.luotxem, sp.luotthue, sp.gia * sp.luotthue
                ORDER BY luotthue DESC, luotxem DESC, binhluan DESC;
        ";
        }
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}


function thongkedhs()
{
    try {

        $sql = "SELECT 
                    COUNT(*) AS donhang,
                    SUM(CASE WHEN trangThai = 1 THEN 1 ELSE 0 END) AS chualh,
                    SUM(CASE WHEN trangThai = 2 THEN 1 ELSE 0 END) AS dalh,
                    SUM(CASE WHEN trangThai = 3 THEN 1 ELSE 0 END) AS dathue
                FROM  
                    donthue";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}