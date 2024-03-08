<?php
//function ProductList()
//{
//    try {
//        $sql = "SELECT sp.idDanhMuc, sp.trangThai, sp.moTa , sp.id , dm.ten AS ten_danh_muc, sp.ten AS ten_san_pham,sp.hinhAnh, sp.gia, GROUP_CONCAT(ap.anhPhu) AS anh_phu
//                FROM danhmuc dm
//                JOIN sanpham sp ON dm.id = sp.idDanhMuc
//                LEFT JOIN anhphu ap ON sp.id = ap.idSP
//                GROUP BY sp.id
//                ";
//
//        $stmt = $GLOBALS['conn']->prepare($sql);
//
//        $stmt->execute();
//
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//
//    } catch (Exception $e) {
//        echo 'ERROR' . $e->getMessage();
//        die;
//    }
//}

function PostsList()
{
    try {

        $sql = "SELECT * FROM baiViet ORDER BY ngayDang DESC";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {

        echo 'ERROR' . $e->getMessage();

        die;
    }
}

function luotxem($id){
    try {

        $sql = "UPDATE sanpham
                SET luotxem = luotxem + 1
                WHERE id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {

        echo 'ERROR' . $e->getMessage();

        die;
    }
}
function ProductList($id)
{
    try {
        $sql = "SELECT sp.idDanhMuc, sp.trangThai, sp.moTa, sp.id, dm.ten AS ten_danh_muc, sp.ten AS ten_san_pham, sp.hinhAnh, sp.gia, GROUP_CONCAT(ap.anhPhu) AS anh_phu
        FROM danhmuc dm
        JOIN sanpham sp ON dm.id = sp.idDanhMuc
        LEFT JOIN anhphu ap ON sp.id = ap.idSP
        WHERE 1";

        if ($id > 0) {
            $sql .= " AND dm.id = $id";
        }

        $sql .= " GROUP BY sp.id
        ORDER BY sp.luotxem DESC";


        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    } catch (Exception $e) {
        echo 'ERROR' . $e->getMessage();
        die;
    }
}