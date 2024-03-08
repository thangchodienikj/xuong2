<main class="main" style="width: 78%; margin: 0 auto;">
    <div class="box_title" style="font-size: 25px; margin-top: 20px;">Ảnh phụ sản phẩm</div>

    <div class="container mt-3">
        <div class="row form_content">
            <div class="col-12">
                <div class="mb-3 formds_loai">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center col-md-2">SẢN PHẨM</th>
                                <th class="text-center col-md-2">HÌNH ẢNH</th>
                                <th class="text-center col-md-2">GIÁ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($listImage as $anhphu) : ?>
                                <?php
                                extract($anhphu);
                                $suadm = "/admin/?act=updateProduct&id=" . $id;
                                $xoadm = "/admin/?act=deleteImage&id=" . $id;
                                ?>
                                <tr>
                                    <td class="col-md-2 text-center"><?= $ten ?></td>
                                    <td class="col-md-2 text-center">
                                        <?php
                                        $limit = 3;
                                        $count = 0;
                                        $array = explode(',', $imageAnhPhu);
                                        echo '<div class="d-flex align-items-center justify-content-center">';
                                        foreach ($array as $anh) {
                                            if ($count >= $limit) {
                                                break;
                                            }
                                            echo '<img src="' . $anh . '" alt="product desc" class="img-fluid" style="max-width: 150px; height: 100px; margin-right: 10px;">';
                                            $count++;
                                        }
                                        echo '</div>';
                                        ?>
                                    </td>
                                    <td class="col-md-2 text-center">
                                        <a href=<?= $suadm ?> class="btn btn-primary btn-block">Sửa</a>
                                        <a href="#" class="btn btn-danger btn-block" onclick="confirmAndRedirect('<?= $xoadm ?>')">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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
