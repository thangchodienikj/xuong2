<main class="main" style="width: 78%; margin: 0 auto;">
    <br>
    <br>
    <div class="box_title" style="font-size: 25px; text-align: center; margin-bottom: 10px;">Đơn hàng</div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="mb-3 formds_loai">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Tên</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Ghi chú</th>
                            <th class="text-center">Tên áo</th>
                            <th class="text-center">Giá thuê</th>
                            <th class="text-center">Ngày liên hệ</th>
                            <th class="text-center">Tình trạng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($donthue as $dh) : ?>
                            <tr>
                                <td class="col-md-1 text-center"><?= $dh['ten'] ?></td>
                                <td class="col-md-1 text-center"><?= $dh['diaChi']  ?></td>
                                <td class="col-md-1 text-center"><?= $dh['sdt'] ?></td>
                                <td class="col-md-1 text-center"><textarea><?= $dh['ghiChu'] ?></textarea></td>
                                <td class="col-md-1 text-center"><?= $dh['tensp'] ?></td>
                                <td class="col-md-1 text-center"><?= $dh['gia'] ?></td>
                                <td class="col-md-1 text-center"><?= $dh['ngayThue'] ?></td>

                                <td class="col-md-1 text-center">
                                    <form action="/admin/?act=tinhtrangdh" method="post">
                                        <input type="hidden" name="id" id="id" value="<?=$dh['id']?>">
                                        <select name="tinhtrangdh">
                                            <?php if ($dh['trangThai'] == 1): ?>
                                                <option value="1" selected>Chưa liên hệ</option>
                                                <option value="2" >Đã liên hệ</option>
                                                <option value="3" disabled>Đã thuê</option>
                                            <?php elseif ($dh['trangThai'] == 2): ?>
                                                <option value="1" disabled>Chưa liên hệ</option>
                                                <option value="2" selected>Đã liên hệ</option>
                                                <option value="3" >Đã thuê</option>
                                            <?php elseif ($dh['trangThai'] == 3): ?>
                                                <option value="1" disabled>Chưa liên hệ</option>
                                                <option value="2" disabled>Đã liên hệ</option>
                                                <option value="3" selected>Đã thuê</option>
                                            <?php endif; ?>
                                        </select>
                                        <input class="btn btn-primary btn-block" type="submit" name="gui" value="Cập nhật">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
