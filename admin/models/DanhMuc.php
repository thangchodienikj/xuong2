<?php
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

function insertCategorys($tenDanhMuc)
{
    try {
        $sql = "INSERT INTO danhmuc (ten) VALUES (:tenDanhMuc)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':tenDanhMuc', $tenDanhMuc);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function deleteCategory($id)
{
    try {
        $sql = "DELETE dm, sp, ap
                FROM danhmuc dm
                LEFT JOIN sanpham sp ON dm.id = sp.idDanhMuc
                LEFT JOIN anhphu ap ON sp.id = ap.idSP
                WHERE dm.id = :id;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function updateCategory($id)
{
    try {
        $sql = "SELECT * FROM danhmuc WHERE id = (:id)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}
function CategorysView($id,$ten)
{
    try {
        $sql = "UPDATE danhmuc SET ten = (:ten) WHERE id = :id;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':ten', $ten);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}
