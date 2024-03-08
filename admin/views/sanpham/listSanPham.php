<main class="main" style="width: 78%; margin: 0 auto;">
    <br>
    <br>
    <div class="box_title" style="font-size: 25px">Danh sách sản phẩm</div>
    <br>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="/admin/?act=listProduct" method="post">
                    <label for="kyw">Tìm kiếm theo tên</label>
                    <input type="text" name="kyw" id="kyw" class="form-control"><br>
                    <label for="iddm">Chọn danh mục</label>
                    <select name="iddm" id="iddm" class="form-control">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listCategory as $danhmuc) {
                            extract($danhmuc);
                            echo "<option value=" . $id . ">$ten</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" class="btn btn-primary mt-3" value="Tìm kiếm" name="listok">
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <a href="/admin/?act=chitietsanpham" class="btn btn-primary" style="background-color: #1d84ea;">Chi tiết sản phẩm</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container mt-3">
        <div class="row form_content">
            <div class="col-12">
                <div class="mb-3 formds_loai">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center col-md-2">SẢN PHẨM</th>
                                <th class="text-center col-md-2">GIÁ</th>
                                <th class="text-center col-md-2">HÌNH ẢNH</th>
                                <th class="text-center col-md-2">MIÊU TẢ</th>
                                <th class="text-center col-md-2">DANH MỤC</th>
                                <th class="text-center col-md-2">TRẠNG THÁI</th>
                                <th class="text-center col-md-1">THAO TÁC</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($listProduct as $sp) : ?>
                                <?php
                                extract($sp);
                                $suadm = "/admin/?act=updateProduct&id=" . $id;
                                $xoadm = "/admin/?act=deleteProduct&id=" . $id;
                                $hinhload = "../upload/" . $hinhAnh;
                                if (is_file($hinhload)) {
                                    $hinh_anh = "<img src='" . $hinhload . "' height='120' width='120'>";
                                    ?>
                                    <tr>
                                        <td class="col-md-2 text-center"><?= $ten ?></td>
                                        <td class="col-md-2 text-center"><?= $gia ?></td>
                                        <td class="col-md-2 text-center"><?= $hinh_anh ?></td>
                                        <td class="col-md-2 text-center"><textarea class="form-control"
                                                                                   rows="4"><?= $moTa ?></textarea></td>
                                        <td class="col-md-2 text-center"><?= $tendanhmuc ?></td>
                                        <td class="col-md-2 text-center">
                                            <form action="/admin/?act=tinhtrangsp" method="post">
                                                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                                <select name="tinhtrangsp">
                                                    <option value="1" <?= ($sp['trangThai'] == 1) ? 'selected' : '' ?>>
                                                        Chưa Thuê
                                                    </option>
                                                    <option value="2" <?= ($sp['trangThai'] == 2) ? 'selected' : '' ?>>
                                                        Đã Thuê
                                                    </option>
                                                </select>
                                                <input class="btn btn-primary btn-block" type="submit" name="gui"
                                                       value="Cập nhật">
                                            </form>
                                        </td>
                                        <td class="col-md-2 text-center">
                                            <a href="<?= $suadm ?>" class="btn btn-primary btn-block">Sửa</a>
                                            <a href="#" class="btn btn-danger btn-block"
                                               onclick="confirmAndRedirect('<?= $xoadm ?>')">Xóa</a>
                                        </td>
                                    </tr>
                                <?php } endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <input class="btn btn-primary btn-block" type="button" value="CHỌN TẤT CẢ">
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-secondary btn-block" type="button" value="BỎ CHỌN TẤT CẢ">
                    </div>
                    <div class="col-md-2">
                        <a href="/admin/?act=addProduct" class="btn btn-success btn-block">NHẬP THÊM</a>
                    </div>
                    <!-- Thêm cột mới -->
                    <div class="col-md-6">
                        <!-- Nút hoặc nội dung cho cột thứ tư -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function confirmAndRedirect(url) {
        if (confirm('Bạn có chắc chắn muốn xóa không?')) {
            window.location.href = url;
        }
    }
</script>