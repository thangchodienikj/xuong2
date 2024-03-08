<main class="main" style="width: 60%; margin: 0 auto;">
    <div class="mb">
        <br>
        <div class="box_title text-center" style="font-size: 25px">Cập nhật danh mục</div>
        <div class="box_content form_account">
            <form action="/admin/?act=updateViewsCategory" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= isset($updataView['id'])? $updataView['id']:'' ?>">
                <div class="mb-3"
                    <label for="tenloai" class="form-label">Tên Loại:</label>
                    <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc"  value="<?= isset($updataView['ten'] ) ? $updataView['ten'] : ''?>">
                </div>
                <button type="submit" class="btn btn-primary" name="productView">Cập nhật</button>
                <a href="/admin/?act=listCategory" class="btn btn-info">Danh Sách</a>
            </form>
            <br>
            <br/>
        </div>
    </div>
</main>
<?php unset($_SESSION['error_messages']); ?>
