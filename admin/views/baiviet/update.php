<?php
$hinhload="../upload/".$updataView['hinhAnh'];
if(is_file($hinhload)){
    $hinh="<img src='".$hinhload."' height='200' width='200' >";
}
?>
<main class="main" style="width: 60%; margin: 0 auto;">
    <div class="mb">
        <br>
        <div class="box_title text-center" style="font-size: 25px">Cập nhật bài viết</div>
        <?php
        if (isset($_SESSION['error_messages'])) {
            $error_messages = $_SESSION['error_messages'];
        }
        ?>
        <div class="box_content form_account">
            <form action="/admin/?act=updateViewsPosts" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?=$updataView['id']?>">
                <div class="mb-3">
                    <label for="tieude" class="form-label">Tiêu đề :</label>
                    <input type="text" name="tieude" id="tieude" class="form-control" value="<?=$updataView['tieuDe']?>">
                </div>
                <div class="mb-3">
                    <label for="hinh" class="form-label">Hình ảnh:</label>
                    <input type="file" name="hinh" id="hinh" class="form-control" >
                    <?php if(isset($hinh)) { echo $hinh; } else { $hinh = ''; } ?>
                </div>
                <div class="mb-3">
                    <label for="editor1" class="form-label">Nội dung :</label>
                    <textarea name="editor1" id="editor1" class="form-control" cols="30" rows="10"><?=$updataView['noiDung']?></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" name="themmoi" class="btn btn-primary" value="Cập nhật">
                    <a href="../admin/?act=listPosts" class="btn btn-info">Danh Sách</a>
                </div>
            </form>
        </div>
    </div>
</main>

