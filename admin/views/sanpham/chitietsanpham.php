<main class="main" style="width: 78%; margin: 0 auto;">
    <br>
    <br>
    <div class="box_title" style="font-size: 25px">Chi tiết sản phẩm</div>
    <br>
    <div class="container mt-3">
        <div class="row form_content">
            <div class="col-12">
                <div class="mb-3 formds_loai">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center col-md-1">SẢN PHẨM</th>
                                <th class="text-center col-md-1">GIÁ</th>
                                <th class="text-center col-md-1">HÌNH ẢNH</th>
                                <th class="text-center col-md-1">MIÊU TẢ</th>
                                <th class="text-center col-md-1">DANH MỤC</th>
                                <th class="text-center col-md-1">TRẠNG THÁI</th>
                                <th class="text-center col-md-1">LƯỢT XEM</th>
                                <th class="text-center col-md-1">LƯỢT THUÊ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($listProduct as $sp) : ?>
                                <?php
                                extract($sp);
                                $hinhload = "../upload/" . $hinhAnh;
                                if (is_file($hinhload)) {
                                    $hinh_anh = "<img src='" . $hinhload . "' height='120' width='120'>";
                                    ?>
                                    <tr>
                                        <td class="col-md-2 text-center"><?= $ten ?></td>
                                        <td class="col-md-2 text-center"><?= $gia ?></td>
                                        <td class="col-md-2 text-center"><?= $hinh_anh ?></td>
                                        <td class="col-md-2 text-center"><textarea class="form-control"rows="4"><?= $moTa ?></textarea></td>
                                        <td class="col-md-2 text-center"><?= $tendanhmuc ?></td>
                                        <td class="col-md-2 text-center"><?php if ($trangThai == 1 ) echo 'Chưa thuê'; elseif($trangThai == 2 ) echo 'Đã thuê'; ?></td>
                                        <td class="col-md-2 text-center">okok<?= $luotxem ?></td>
                                        <td class="col-md-2 text-center"><?= $luotthue ?></td>
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