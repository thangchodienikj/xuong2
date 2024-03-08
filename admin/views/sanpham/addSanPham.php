<main class="main text-center" style="width: 78%; margin: 0 auto;">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="mb">
                    <br>
                    <div class="box_title" style="font-size: 25px">THÊM MỚI SẢN PHẨM</div>
                    <br>
                    <?php
                    if (isset($_SESSION['error_messages'])) {
                        $error_messages = $_SESSION['error_messages'];
                    }
                    ?>
                    <div class="box_content form_account">
                        <form action="/admin/?act=addProduct" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="masp" class="form-label">Danh mục</label>
                                <select class="form-select" name="iddm">
                                    <?php
                                    foreach ($listCategory as $danhmuc) {
                                        extract($danhmuc);
                                        echo "<option value=" . $id . ">$ten</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tensp" class="form-label">Tên sản phẩm:</label>
                                <input type="text" class="form-control" name="tensp" id="tensp">
                                <span id="giaError" style="color: red">
                                <?php echo (!empty($error_messages['name']['required'])) ? $error_messages['name']['required'] : null; ?>
                                <?php echo (!empty($error_messages['name']['length'])) ? $error_messages['name']['length'] : null; ?>
                                </span>
                            </div>

                            <div class="mb-3">
                                <label for="giasp" class="form-label">Giá sản phẩm:</label>
                                <input type="text" class="form-control" name="giasp" id="giasp">
                                <span id="giaError" style="color: red">
                                <?php echo (!empty($error_messages['price']['required'])) ? $error_messages['price']['required'] : null; ?>
                                <?php echo (!empty($error_messages['price']['invalid'])) ? $error_messages['price']['invalid'] : null; ?>
                                </span>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="soluong" id="soluong" value="1">
                                <input type="hidden" class="form-control" name="trangthai" id="trangthai" value="1">
                            </div>

                            <div class="mb-3">
                                <span id="giaError" style="color: red">
                                <label for="hinh" class="form-label">Ảnh sản phẩm:</label>
                                <input type="file" class="form-control" name="hinh" id="hinh">
                                <?php echo (!empty($error_messages['image']['required'])) ? $error_messages['image']['required'] : null; ?>
                                </span>
                            </div>

                            <div class="mb-3">
                                <span id="giaError" style="color: red">
                                <label for="editor1" class="form-label">Mô Tả sản phẩm:</label>
                                <textarea class="form-control" name="editor1" id="editor1" cols="30"
                                          rows="10"></textarea>
                                <?php echo (!empty($error_messages['describe']['required'])) ? $error_messages['describe']['required'] : null; ?>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary" name="themmoi">Thêm sản phẩm</button>
                            <a href="/admin/?act=listProduct" class="btn btn-info">Danh Sách</a>
                            <a href="/admin/?act=addImages" class="btn btn-info">Ảnh phụ</a>
                            <br>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Find the input element
        var giaInput = document.getElementById('giasp');

        // Attach an event listener to the input element
        giaInput.addEventListener('input', function () {
            // Get the entered value
            var enteredValue = giaInput.value;

            // Check if the entered value is less than 1
            if (enteredValue < 1) {
                // Display an error message
                document.getElementById('giaError').textContent = 'Số lượng phải lớn hơn hoặc bằng 1';
            } else {
                // Clear the error message
                document.getElementById('giaError').textContent = '';
            }
        });
    });
</script>
<?php unset($_SESSION['error_messages']); ?>