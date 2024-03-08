<?php
function ProductOne($id)
{
    try {
        $sql = "SELECT  sp.trangThai, sp.moTa, sp.id, dm.ten AS ten_danh_muc, sp.ten AS ten_san_pham, sp.hinhAnh, sp.gia, GROUP_CONCAT(ap.anhPhu) AS anh_phu
                FROM danhmuc dm
                JOIN sanpham sp ON dm.id = sp.idDanhMuc
                LEFT JOIN anhphu ap ON sp.id = ap.idSP
                WHERE sp.id = (:id) 
                GROUP BY sp.id
               ";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);


    } catch (Exception $e) {
        echo 'ERROR' . $e->getMessage();
        die;
    }
}

function getAllCategory()
{
    try {

        $sql = "SELECT * FROM danhmuc";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function baivietone($id){
    try {

        $sql = "SELECT * FROM baiviet WHERE id = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function checkspyt($idsp, $idtk) {
    try {
        $sql = "SELECT * FROM sanphamyt WHERE idSP = :idsp AND idTK = :idtk";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':idsp', $idsp);
        $stmt->bindParam(':idtk', $idtk);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        return false;
    }
}
function updatespyt($idsp, $idtk) {
    try {
        $sql = "UPDATE sanphamyt SET idSP = :idsp, idTK = :idtk WHERE idSP = :idsp AND idTK = :idtk";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':idsp', $idsp);
        $stmt->bindParam(':idtk', $idtk);
        $stmt->execute();

        return true;

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        return false;
    }
}
function insetsanphamyt($idsp, $idtk) {
    try {
        $sql = "INSERT INTO sanphamyt (idSP, idTK) VALUES (:idsp, :idtk)";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':idsp', $idsp);
        $stmt->bindParam(':idtk', $idtk);
        $stmt->execute();

        return true;

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        return false;
    }
}


function listsanphamyt($idtk) {
    try {
        $sql = "SELECT tk.id as idtk , sp.id , sp.ten AS ten_san_pham, sp.hinhAnh, sp.gia, sp.trangThai
                FROM sanphamyt syt
                JOIN sanpham sp ON syt.idSP = sp.id
                JOIN taikhoan tk ON syt.idTK = tk.id
                WHERE syt.idTK = :idtk";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':idtk', $idtk);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        return false;
    }
}

function deletespyt($idsp, $idtk) {
    try {
        $sql = "DELETE FROM sanphamyt WHERE idSP = :idSP AND idTK = :idTK;";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':idSP', $idsp);
        $stmt->bindParam(':idTK', $idtk);
        $stmt->execute();

        return true;

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        return false;
    }
}

function timkiemproduct($name){
    try {
        $sql = "SELECT sp.idDanhMuc, sp.trangThai, sp.moTa, sp.id, dm.ten AS ten_danh_muc, sp.ten AS ten_san_pham, sp.hinhAnh, sp.gia, GROUP_CONCAT(ap.anhPhu) AS anh_phu
        FROM danhmuc dm
        JOIN sanpham sp ON dm.id = sp.idDanhMuc
        LEFT JOIN anhphu ap ON sp.id = ap.idSP
        WHERE 1";

        if ($name != '') {
            $sql .= " AND sp.ten LIKE :name";
        }

        $sql .= " GROUP BY sp.id";
        $stmt = $GLOBALS['conn']->prepare($sql);

        if ($name != '') {
            $nameParam = "%" . $name . "%";
            $stmt->bindParam(':name', $nameParam, PDO::PARAM_STR);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR' . $e->getMessage();
        die;
    }
}

function binhluan($id) {
    try {
        $sql = "SELECT * FROM binhluan WHERE idsp = :id ";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        return false;
    }
}

function insertbinhluan($idsp, $taikhoan, $danhgia, $camnhan) {
    try {
        $sql = "INSERT INTO binhluan (idsp, taikhoan, danhgia, ngaybinhluan, camnhan)
                VALUES (:idsp, :taikhoan, :danhgia, NOW(), :camnhan)";

        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':idsp', $idsp);
        $stmt->bindParam(':taikhoan', $taikhoan);
        $stmt->bindParam(':danhgia', $danhgia);
        $stmt->bindParam(':camnhan', $camnhan);

        $stmt->execute();


    } catch (Exception $e) {
        // In ra thông báo lỗi nếu có vấn đề
        echo 'LỖI: ' . $e->getMessage();
    }
}
