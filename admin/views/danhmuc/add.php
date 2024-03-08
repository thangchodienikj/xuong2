<main class="main text-center" style="width: 60%; margin: 0 auto;">
    <div class="mb">
        <br>
        <div class="box_title" style="font-size: 25px">Thêm danh mục mới</div> <br>
        <?php
        if (isset($_SESSION['error_messages'])) {
            $error_messages = $_SESSION['error_messages'];
        }
        ?>
        <div class="box_content form_account">
            <form action="/admin/?act=addCategory" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tenloai">Tên Loại:</label>
                    <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc">
                    <span style="color: red;">
                        <?php echo(!empty($error_messages['name']['required']))?$error_messages['name']['required']: null ; ?>
                        <?php echo(!empty($error_messages['name']['length']))?$error_messages['name']['length']: null ; ?>
                    </span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="themmoi">Thêm danh mục</button>
                <a href="/admin/?act=listCategory" class="btn btn-info">Danh Sách</a>
            </form>
            <br>
            <br/>
        </div>
    </div>
</main><!-- End .main -->
<?php unset($_SESSION['error_messages']); ?>
