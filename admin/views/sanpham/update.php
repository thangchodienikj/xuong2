<?php
$hinhload="../upload/".$updataView['hinhAnh'];
if(is_file($hinhload)){
    $hinh="<img src='".$hinhload."' height='80' width='80' >";
}               
?>
<main class="main" style="width: 60%; margin: 0 auto;">
    <div class="mb">
        <br>
        <div class="box_title" style="font-size: 25px">Cập nhập sản phẩm mới </div>
        <br>
        <div class="box_content form_account">
            <form action="/admin/?act=updateViewsProduct" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="iddm" class="form-label">Danh mục</label>
                    <select name="iddm" class="form-select">
                        <?php
                        foreach ($listCategory as $danhmuc){
                            extract($danhmuc);
                            $s = ($danhmuc['id'] == $updataView['idDanhMuc']) ? 'selected' : '';
                            echo '<option value="'.$id.'" '.$s.' >'.$danhmuc['ten'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <input type="hidden" name="id" id="id" value="<?=$updataView['id']?>">
                <div class="mb-3">
                    <label for="tensp" class="form-label">Tên sản phẩm:</label>
                    <input type="text" name="tensp" id="tensp" class="form-control" value="<?=$updataView['ten']?>">
                </div>
                <div class="mb-3">
                    <label for="giasp" class="form-label">Giá sản phẩm:</label>
                    <input type="text" name="giasp" id="giasp" class="form-control" value="<?=$updataView['gia']?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="soluong" id="soluong" class="form-control" value="1">
                    <input type="hidden" name="trangthai" id="trangthai" class="form-control" value="1">
                </div>
                <div class="mb-3">
                    <label for="hinh" class="form-label">Hình ảnh:</label>
                    <input type="file" name="hinh" id="hinh" class="form-control" >
                    <?php if(isset($hinh)) { echo $hinh; } else { $hinh = ''; } ?>
                </div>
                <div class="mb-3">
                    <label for="editor1" class="form-label">Mô Tả sản phẩm:</label>
                    <textarea name="editor1" id="editor1" class="form-control" cols="30" rows="10"><?=$updataView['moTa']?></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
                    <a href="../admin/?act=listProduct" class="btn btn-info">Danh Sách</a>
                </div>
            </form>
        </div>
    </div>
</main>

