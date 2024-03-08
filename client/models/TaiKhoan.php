<?php
function checkLogin($taikhoan,$matKhau)
{
    try {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan = (:taikhoan) and matKhau = (:matKhau)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':taikhoan', $taikhoan);
        $stmt->bindParam(':matKhau', $matKhau);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}
function updateLogin($id,$taiKhoan,$matKhau,$ten,$sdt,$diaChi)
{
    try {
        $sql = "UPDATE taikhoan 
        SET taiKhoan = :taiKhoan,
            matKhau = :matKhau,
            ten = :ten,
            sdt = :sdt,
            diaChi = :diaChi
        WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':taiKhoan', $taiKhoan);
        $stmt->bindParam(':matKhau', $matKhau);
        $stmt->bindParam(':ten', $ten);
        $stmt->bindParam(':sdt', $sdt);
        $stmt->bindParam(':diaChi', $diaChi);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function insertLogin($taiKhoan,$matKhau,$ten,$diaChi,$sdt,$vaiTro){
    try {
        $sql = "INSERT INTO taikhoan (taiKhoan, matKhau, ten, sdt, diaChi,vaiTro)
        VALUES (:taiKhoan, :matKhau, :ten, :sdt, :diaChi ,:vaiTro)";
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':taiKhoan', $taiKhoan);
        $stmt->bindParam(':matKhau', $matKhau);
        $stmt->bindParam(':ten', $ten);
        $stmt->bindParam(':sdt', $sdt);
        $stmt->bindParam(':diaChi', $diaChi);
        $stmt->bindParam(':vaiTro', $vaiTro);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}
