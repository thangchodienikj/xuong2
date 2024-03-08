<main class="main text-center" style="width: 78%; margin: 0 auto;">
    <div class="mb-5"></div>
    <div class="box_title" style="font-size: 25px">Bình luận</div> <br>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    <div class="mb-3 formds_loai">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Tài khoản</th>
                                <th class="text-center">Sản phẩm</th>
                                <th class="text-center">Đánh giá</th>
                                <th class="text-center">Ngày bình luận</th>
                                <th class="text-center">Cảm nhận</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($binhluan as $bl) : ?>
                                <?php extract($bl); ?>
                                <tr>
                                    <td class="col-md-2 text-center"><?= $bl['taikhoan'] ?></td>
                                    <td class="col-md-2 text-center"><?= $bl['ten'] ?></td>
                                    <td class="col-md-2 text-center"><?= $bl['danhgia'] ?></td>
                                    <td class="col-md-2 text-center"><?= $bl['ngaybinhluan'] ?></td>
                                    <td class="col-md-2 text-center"><?= $bl['camnhan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
