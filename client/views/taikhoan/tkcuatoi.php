<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Tài khoản của tôi</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Tài khoản của tôi</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-lg-3">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link  " id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">
                                    Bảng điều khiển</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Chi tiết tài khoản</a>
                            </li>
                            <li class="nav-item">
                                <form action="?act=dangxuat" method="post">
                                    <button class="nav-link" style="border: none ; background-color: white" type="submit">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->

                    <div class="col-md-8 col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active " id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                                <p>
                                    Xin chào  <span class="font-weight-normal text-dark"><?php if (isset($_SESSION['userxuong'])){ extract($_SESSION['userxuong']); echo $ten ;} ?></span>
                                    <br>Bảng điều khiển tài khoản của bạn, bạn có thể xem <a href="#tab-orders" class="tab-trigger-link link-underline">những đơn đặt hàng gần đây </a>, người quản lý của bạn<a href="#tab-address" class="tab-trigger-link">
                                        địa chỉ giao hàng và thanh toán</a>, và <a href="#tab-account" class="tab-trigger-link">Chỉnh sửa mật khẩu và chi tiết tài khoản của bạn</a>.</p>
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                                <p>Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo mặc định.</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-dashboard">
                                            <div class="card-body">
                                                <h3 class="card-title">Địa chỉ giao hàng</h3><!-- End .card-title -->
                                                <?php if (isset($_SESSION['userxuong'])){ extract($_SESSION['userxuong']); ?>
                                                <p><?= $name ?><br>
                                                    <?= $sdt ?><br>
                                                    <?= $email ?><br>
                                                    <?php } ?>
                                                    <a href="#">
                                                        Chỉnh sửa<i class="icon-edit"></i></a></p>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .card-dashboard -->
                                    </div><!-- End .col-lg-6 -->

                                    <div class="col-lg-6">
                                        <div class="card card-dashboard">
                                            <div class="card-body">
                                                <h3 class="card-title">

                                                    Địa chỉ giao hàng</h3><!-- End .card-title -->

                                                <p>
                                                    Bạn chưa thiết lập loại địa chỉ này.<br>
                                                    <a href="#">

                                                        Chỉnh sửa <i class="icon-edit"></i></a></p>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .card-dashboard -->
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                                <form action="index.php?act=capnhat" method="post">
                                    <?php if (isset($_SESSION['userxuong'])){ extract($_SESSION['userxuong']); ?>
                                    <input type="hidden"  value="<?=$id?>" name="id" id="id">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Tài khoản</label>
                                            <input type="text" class="form-control mb-2" value="<?=$taiKhoan?>" name="tk">
                                            <span style="color: red;"><?php echo isset($_SESSION['error']['tk']) ? $_SESSION['error']['tk'] : ''; ?></span>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label>Mật khẩu</label>
                                            <input type="password" class="form-control mb-2" value="<?=$matKhau?>" name="mk">
                                            <span style="color: red;"><?php echo isset($_SESSION['error']['mk']) ? $_SESSION['error']['mk'] : ''; ?></span>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->

                                    <div class="form-group">
                                        <label for="name">Họ và tên:</label>
                                        <input type="text" class="form-control mb-2" value="<?=$ten?>" name="name" >
                                        <span style="color: red;"><?php echo isset($_SESSION['error']['name']) ? $_SESSION['error']['name'] : ''; ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="diachi">Địa chỉ:</label>
                                        <input type="text" class="form-control mb-2" value="<?=$diaChi?>" name="diachi">
                                        <span style="color: red;"><?php echo isset($_SESSION['error']['diachi']) ? $_SESSION['error']['diachi'] : ''; ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text" class="form-control mb-2" value="<?=$sdt?>" name="sdt">
                                        <span style="color: red;"><?php echo isset($_SESSION['error']['sdt']) ? $_SESSION['error']['sdt'] : ''; ?></span>
                                    </div>
                                    <input type="submit" class="btn btn-outline-primary-2" value="Cập nhật" name="capnhat">
                                </form>
                                <?php } ?>
                            </div><!-- .End .tab-pane -->
                        </div>
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
<?php unset($_SESSION['error'])?>