<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">
                Xác nhận thông tin</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?act=giohang">
                        Giỏ hàng </a></li>
                <li class="breadcrumb-item active" aria-current="page">Xác nhận thông tin</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <form action="/?act=guilienhe" method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="checkout-title">
                                Chi tiết thanh toán </h2><!-- End .checkout-title -->
                            <?php if (isset($_SESSION['userxuong'])) {
                                extract($_SESSION['userxuong']);
                                ?>
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" class="form-control" value="<?= $ten ?>" name="name">
                                    <!-- Hiển thị thông báo lỗi -->
                                    <span class="error-message"><?= isset($_SESSION['error']['name']) ? $_SESSION['error']['name'] : '' ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="diachi">Địa chỉ</label>
                                    <input type="text" class="form-control" value="<?= $diaChi ?>" name="diachi">
                                    <!-- Hiển thị thông báo lỗi -->
                                    <span class="error-message"><?= isset($_SESSION['error']['diachi']) ? $_SESSION['error']['diachi'] : '' ?></span>
                                </div>


                                <div class="form-group">
                                    <label for="sdt">Số điện thoại</label>
                                    <input type="text" class="form-control" value="<?= $sdt ?>" name="sdt">
                                    <!-- Hiển thị thông báo lỗi -->
                                    <span class="error-message"><?= isset($_SESSION['error']['sdt']) ? $_SESSION['error']['sdt'] : '' ?></span>

                                    <label for="editor1">Ghi chú</label>
                                    <textarea name="editor1" class="form-control" cols="30" rows="4"
                                              placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt khi giao hàng"></textarea>
                                </div>
                                <?php }else{ ?>
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" class="form-control" name="name">
                                    <!-- Hiển thị thông báo lỗi -->
                                    <span class="error-message"><?= isset($_SESSION['error']['name']) ? $_SESSION['error']['name'] : '' ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="diachi">Địa chỉ</label>
                                    <input type="text" class="form-control" name="diachi">
                                    <!-- Hiển thị thông báo lỗi -->
                                    <span class="error-message"><?= isset($_SESSION['error']['diachi']) ? $_SESSION['error']['diachi'] : '' ?></span>
                                </div>


                                <div class="form-group">
                                    <label for="sdt">Số điện thoại</label>
                                    <input type="text" class="form-control" name="sdt">
                                    <!-- Hiển thị thông báo lỗi -->
                                    <span class="error-message"><?= isset($_SESSION['error']['sdt']) ? $_SESSION['error']['sdt'] : '' ?></span>

                                    <label for="editor1">Ghi chú</label>
                                    <textarea name="editor1" class="form-control" cols="30" rows="4"
                                              placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt khi giao hàng"></textarea>
                                </div>
                            <?php } ?>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-8">
                            <div class="summary">
                                <h3 class="summary-title">
                                    Đơn hàng của bạn</h3><!-- End .summary-title -->
                                <table class="table table-summary">
                                    <thead>
                                    <tr>
                                        <th class="col-lg-3">Hình ảnh</th>
                                        <th class="col-lg-3">Sản phẩm</th>
                                        <th class="col-lg-3">Giá thuê</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <input type="hidden" class="form-control" value="1" name="trangthai">
                                    <?php foreach ($lienhe as $gh):extract($gh); ?>
                                        <tr>
                                            <td class="col-lg-3"><img src="<?=$hinhAnh?>" style="width: 100px;height: 100px"></td>
                                            <td class="col-lg-3"><a href="#"><?=$ten?> </a></td>

                                            <td class="col-lg-1" style="padding-left: 220px;"><a href="#"><?=$gia?> VNĐ</a></td>
                                            <input type="hidden" class="form-control" value="<?= $id ?>" name="id">
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table><!-- End .table table-summary -->
                                <br>
                                <div class="accordion-summary" id="accordion-payment">
                                    <input name="dathang" type="submit"
                                           class="btn btn-outline-primary-2 btn-order btn-block" value="Gửi liên hệ">
                                </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                </form>
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
<?php unset($_SESSION['error']) ?>