<main class="main" style="width: 78%; margin: 0 auto;">
    <br>
    <br>
    <div class="box_title" style="font-size: 25px">Danh sách bài viết</div> <br>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    <div class="mb-3 formds_loai">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">TIÊU ĐÊ</th>
                                <th class="text-center">NỘI DUNG</th>
                                <th class="text-center">HÌNH ẢNH</th>
                                <th class="text-center">THAO TÁC</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($listPosts as $danhmuc) : ?>
                                <?php
                                extract($danhmuc);
                                $suadm = "/admin/?act=updatePosts&id=" . $id;
                                $xoadm = "/admin/?act=deletePosts&id=" . $id;
                                $hinhload = "../upload/" . $hinhAnh;
                                if (is_file($hinhload)) {
                                $hinh_anh = "<img src='" . $hinhload . "' height='200' width='250'>";
                                ?>
                                <tr>
                                    <td class="col-md-3 text-center"><?= $tieuDe ?></td>
                                    <td class="col-md-3 text-center"><textarea name="" id="" cols="30"
                                                                               rows="10"><?= $noiDung ?></textarea></td>
                                    <td class="col-md-3 text-center"><?= $hinh_anh ?></td>
                                    <td class="col-md-3 text-center">
                                        <a href=<?= $suadm ?> class="btn btn-primary btn-block">Sửa</a>
                                        <a href="#" class="btn btn-danger btn-block" onclick="confirmAndRedirect('<?= $xoadm ?>')">Xóa</a>
                                    </td>
                                </tr>
                            <?php } endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <a href="/admin/?act=addPosts" class="btn btn-success btn-block">NHẬP THÊM</a>
                        </div>
                        <!-- Thêm cột mới -->
                        <div class="col-md-3">
                            <!-- Nút hoặc nội dung cho cột thứ tư -->
                        </div>
                    </div>
                </form>
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