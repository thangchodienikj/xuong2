<?php
function getAllPosts()
{
    try {

        $sql = "SELECT * FROM baiviet  ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function insertPostss($tieuDe,$noiDung,$hinhAnh)
{
    try {
        $sql = "INSERT INTO baiviet (tieuDe,noiDung,hinhAnh,ngayDang) VALUES (:tieuDe,:noiDung,:hinhAnh,NOW())";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':tieuDe', $tieuDe);
        $stmt->bindParam(':noiDung', $noiDung);
        $stmt->bindParam(':hinhAnh', $hinhAnh);
        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function deletePosts($id)
{
    try {
        $sql = "DELETE FROM baiviet WHERE id = (:id);";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}

function updatePosts($id)
{
    try {
        $sql = "SELECT * FROM baiviet WHERE id = (:id)";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}
function PostssView($id,$tieuDe,$noiDung,$hinhAnh)
{
    try {
        $sql = "UPDATE baiviet SET 
                tieuDe = (:tieuDe) ,
                noiDung = (:noiDung) , 
                hinhAnh =(:hinhAnh) 
                WHERE id = :id;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tieuDe', $tieuDe);
        $stmt->bindParam(':noiDung', $noiDung);
        $stmt->bindParam(':hinhAnh', $hinhAnh);

        $stmt->execute();

    } catch (Exception $e) {
        echo 'LỖI: ' . $e->getMessage();
        die;
    }
}
