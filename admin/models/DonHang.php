<?php
function donthue()
{
    try {

        $sql = "SELECT dt.id , sp.ten tensp , sp.gia , sp.hinhAnh , dt.ngayThue ,dt.trangThai ,dt.ten,dt.diaChi,dt.sdt,dt.ghiChu
                FROM sanpham sp
                JOIN donthue dt ON sp.id = dt.idSP;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function trangthaidh($id, $trangThai)
{
    try {
        $sql = "UPDATE sanpham sp
        JOIN donthue dt ON dt.idSP = sp.id
        SET dt.trangThai = :trangthai";

        if ($trangThai == 3) {
            $sql .= ", sp.luotthue = sp.luotthue + 1";
        }

        $sql .= " WHERE dt.id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':trangthai', $trangThai);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}