<?php
function insertProducts($ten, $soLuong, $gia, $hinhAnh, $moTa, $idDanhMuc, $trangThai)
{
    try {
        $sql = "INSERT INTO sanpham (ten, soLuong, gia, hinhAnh, moTa, idDanhMuc, luotxem , trangThai ,luotthue)
        VALUES (:ten, :soluong, :gia, :hinhanh, :mota, :iddanhmuc,0, :trangthai,0)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':ten', $ten);
        $stmt->bindParam(':soluong', $soLuong);
        $stmt->bindParam(':gia', $gia);
        $stmt->bindParam(':hinhanh', $hinhAnh);
        $stmt->bindParam(':mota', $moTa);
        $stmt->bindParam(':iddanhmuc', $idDanhMuc);
        $stmt->bindParam(':trangthai', $trangThai);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}


function deleteProduct($id)
{
    try {
        $sql = "DELETE sp, ap , bl
                FROM sanpham sp
                LEFT JOIN anhphu ap ON sp.id = ap.idSP
                JOIN binhluan bl ON sp.id = bl.idSP
                WHERE sp.id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function updateProduct($id)
{
    try {
        $sql = "SELECT * FROM sanpham WHERE id = (:id)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function productsView($id, $ten, $soLuong, $gia, $hinhAnh, $moTa, $idDanhMuc, $trangThai)
{
    try {
        $sql = "UPDATE sanpham SET 
                ten = (:ten),
                soLuong = (:soluong),
                gia = (:gia),
                hinhAnh = (:hinhanh),
                moTa = (:mota),
                idDanhMuc = (:iddanhmuc),
                trangThai = (:trangthai)
                WHERE id = (:id)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':ten', $ten);
        $stmt->bindParam(':soluong', $soLuong);
        $stmt->bindParam(':gia', $gia);
        $stmt->bindParam(':hinhanh', $hinhAnh);
        $stmt->bindParam(':mota', $moTa);
        $stmt->bindParam(':iddanhmuc', $idDanhMuc);
        $stmt->bindParam(':trangthai', $trangThai);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function getAllImage()
{
    try {
        $sql = "SELECT sp.id, sp.ten, GROUP_CONCAT(ap.anhPhu) AS imageAnhPhu
                FROM anhPhu ap
                JOIN sanpham sp ON ap.idSP = sp.id
                GROUP BY sp.id; ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function insertImages($idSP, $hinhAnh)
{
    try {
        $sql = "INSERT INTO anhphu (idSP, anhPhu) VALUES (:idSP, :hinhAnh)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':idSP', $idSP);
        $stmt->bindParam(':hinhAnh', $hinhAnh);

        $stmt->execute();
    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}


function deleteImage($id)
{
    try {
        $sql = "DELETE FROM anhphu WHERE idSP = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function getAllProduct($kyw, $iddm)
{
    try {

        $sql = "SELECT sp.luotxem, sp.luotthue , sp.id, sp.ten, sp.soLuong, sp.gia, sp.hinhAnh, sp.moTa, sp.trangThai, dm.ten AS tendanhmuc
        FROM sanpham sp
        JOIN danhmuc dm ON sp.idDanhMuc = dm.id
        WHERE 1";

        if ($kyw != '') {
            $sql .= " AND sp.ten LIKE '%" . $kyw . "%'";
        }

        if ($iddm > 0) {
            $sql .= " AND dm.id = '" . $iddm . "'";
        }

        $sql .= " ORDER BY sp.id";
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function trangthaisp($id, $trangThai)
{
    try {
        $sql = "UPDATE sanpham SET 
                trangThai = (:trangthai)
                WHERE id = (:id)";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':trangthai', $trangThai);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function listbinhluan()
{
    try {
        $sql = "SELECT sp.ten, bl.taikhoan,bl.danhgia, bl.ngaybinhluan, bl.camnhan 
                FROM binhluan bl 
                JOIN sanpham sp ON bl.idsp = sp.id;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}