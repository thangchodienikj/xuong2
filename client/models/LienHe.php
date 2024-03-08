<?php
function lienhesp($id)
{
    try {
        $sql = "SELECT * FROM sanpham WHERE id = :id ";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR' . $e->getMessage();
        die;
    }
}

function insertlienhe($idSP, $trangThai, $ten, $diaChi, $sdt, $ghiChu)
{
    try {
        $sql = "INSERT INTO donthue (idSP, ngayThue, trangThai, ten, diaChi, sdt, ghiChu) VALUES (:idSP, NOW(), :trangThai, :ten, :diaChi, :sdt, :ghiChu)";
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':idSP', $idSP);
        $stmt->bindParam(':trangThai', $trangThai);
        $stmt->bindParam(':ten', $ten);
        $stmt->bindParam(':diaChi', $diaChi);
        $stmt->bindParam(':sdt', $sdt);
        $stmt->bindParam(':ghiChu', $ghiChu);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'ERROR' . $e->getMessage();
        die;
    }
}
function checklienhe($idSP, $sdt)
{
    try {
        $sql = "SELECT COUNT(id) as sl FROM donthue
                WHERE ngayThue BETWEEN DATE_FORMAT(NOW(), '%Y-%m-%d 00:00:00')
                AND DATE_FORMAT(NOW(), '%Y-%m-%d 23:59:59')
                AND idsp = :idSP AND sdt = :sdt";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':idSP', $idSP);
        $stmt->bindParam(':sdt', $sdt);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR' . $e->getMessage();
        die;
    }
}