<main class="main text-center" style="width: 60%; margin: 0 auto;">
    <div class="mb">
        <br>
        <div class="box_title" style="font-size: 25px">Thêm bài viết mới</div>
        <br>
        <?php
        if (isset($_SESSION['error_messages'])) {
            $error_messages = $_SESSION['error_messages'];
        }
        ?>
        <div class="box_content form_account">
            <form action="/admin/?act=addPosts" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="tenloai">Tiêu đề:</label>
                        <input type="text" class="form-control" name="tieude" id="tieude">
                        <span style="color: red;">
                        <?php echo (!empty($error_messages['error']['noidung'])) ? $error_messages['error']['noidung'] : null; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="hinh">Hình ảnh:</label>
                        <input type="file" class="form-control" name="hinh" id="hinh">
                        <span style="color: red;">
                        <?php echo (!empty($error_messages['error']['hinhanh'])) ? $error_messages['error']['hinhanh'] : null; ?>
                        </span>
                    </div>
                    <input type="hidden" class="form-control" name="luotxem" id="luotxem" value="0">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="editor1" class="form-label">Nội dung:</label>
                            <textarea class="form-control" name="editor1" id="editor1" cols="30"
                                      rows="10"></textarea>
                            <span style="color: red"><?php echo (!empty($error_messages['name']['required'])) ? $error_messages['name']['required'] : null; ?></span>
                        </div>
                        <span style="color: red;">
                            <?php echo (!empty($error_messages['name']['required'])) ? $error_messages['name']['required'] : null; ?>
                        </span>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="themmoi">Thêm bài viết</button>
                    <a href="/admin/?act=listPosts" class="btn btn-info">Danh Sách</a>
            </form>
            <br>
            <br/>
        </div>
    </div>
</main><!-- End .main -->
<?php unset($_SESSION['$error_messages']); ?>
