<!DOCTYPE html>
<html lang="vi">

<!-- molla/index-6.html  22 Nov 2019 09:56:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Mẫu Bootstrap Thương mại điện tử</title>
    <meta name="keywords" content="Mẫu HTML5">
    <meta name="description" content="Molla - Mẫu Bootstrap Thương mại điện tử">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="../../assets/images/icons/site.html">
    <link rel="mask-icon" href="../../assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="../../assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="../assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../../assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Tệp CSS của các Plugin -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/css/plugins/jquery.countdown.css">
    <!-- Tệp CSS Chính -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/skins/skin-demo-6.css">
    <link rel="stylesheet" href="../../assets/css/demos/demo-6.css">
</head>

<body>
<div class="page-wrapper">
    <header class="header header-6">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <ul class="top-menu top-link-menu d-none d-md-block">
                        <li>
                            <a href="#">Liên kết</a>
                            <ul>
                                <li><a href="tel:#"><i class="icon-phone"></i>Gọi: +0123 456 789</a></li>
                            </ul>
                        </li>
                    </ul><!-- Kết thúc .top-menu -->
                </div><!-- Kết thúc .header-left -->

                <div class="header-right">
                    <div class="social-icons social-icons-color">
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                    class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                    class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Instagram" target="_blank"><i
                                    class="icon-pinterest-p"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Pinterest" target="_blank"><i
                                    class="icon-instagram"></i></a>
                    </div><!-- Kết thúc .soial-icons -->
                    <ul class="top-menu top-link-menu">
                        <li>
                            <a href="#">Liên kết</a>
                            <ul>
                                <?php
                                if (isset($_SESSION['userxuong'])) {
                                    extract($_SESSION['userxuong']);
                                    echo '<li><a href="?act=tkcuatoi" >' . $_SESSION['userxuong']['taiKhoan'] . '</a></li>';
                                } else {
                                    echo '<li><a href="?act=tkmk" ><i class="icon-user"></i>Đăng nhập</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul><!-- Kết thúc .top-menu -->

                    <div class="header-dropdown">
                        <a href="#">USD</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">Eur</a></li>
                                <li><a href="#">Usd</a></li>
                            </ul>
                        </div><!-- Kết thúc .header-menu -->
                    </div><!-- Kết thúc .header-dropdown -->

                    <div class="header-dropdown">
                        <a href="#">Tiếng việt</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">Tiếng Anh</a></li>
                                <li><a href="#">Tiếng Việt</a></li>
                            </ul>
                        </div><!-- Kết thúc .header-menu -->
                    </div><!-- Kết thúc .header-dropdown -->
                </div><!-- Kết thúc .header-right -->
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="/?act=timkiemsp" method="post">
                            <div class="header-search-wrapper search-wrapper-wide">
                                <label for="q" class="sr-only">Tìm kiếm</label>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                <input type="search" class="form-control" name="name" id="name"
                                       placeholder="Tìm kiếm sản phẩm ..." >
                            </div><!-- Kết thúc .header-search-wrapper -->
                        </form>
                    </div><!-- Kết thúc .header-search -->
                </div>
                <div class="header-center">
                    <a href="index.html" class="logo">
                        <img src="../../assets/images/demos/demo-6/logo.png" alt="Logo Molla" width="82" height="20">
                    </a>
                </div><!-- Kết thúc .header-left -->

                <div class="header-right">
                    <div class="dropdown cart-dropdown">
                        <?php if (isset($_SESSION['userxuong'])) {
                            extract($_SESSION['userxuong']); ?>
                            <a href="/?act=sanphamyt&idtk=<?= $id ?>" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">
                                    <?php
                                    if (isset($_SESSION['spyt_data'])) {
                                        $soLuongBanGhi = sizeof($_SESSION['spyt_data']);
                                        echo  $soLuongBanGhi;
                                    }
                                    ?>
                            </span>
                                <span class="wishlist-txt">Yêu thích</span>
                            </a>
                        <?php }else{ ?>
                            <a href="/?act=tkmk" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">
                                0
                            </span>
                                <span class="wishlist-txt">Yêu thích</span>
                            </a>
                            <?php } ?>
                    </div><!-- Kết thúc .cart-dropdown -->
                </div>
            </div><!-- Kết thúc .container -->
        </div><!-- Kết thúc .header-middle -->

        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li>
                                <a href="index.php" class="sf-with-ul">Trang Chủ</a>
                            </li>
                            <li>
                                <a href="/?act=cuahang" class="sf-with-ul">Cửa hàng</a>
                            </li>
                            <li>
                                <a href="/?act=baiviet" class="sf-with-ul">Bài viết</a>
                            </li>

                        </ul><!-- Kết thúc .menu -->
                    </nav><!-- Kết thúc .main-nav -->

                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Chuyển đổi menu di động</span>
                        <i class="icon-bars"></i>
                    </button>
                </div><!-- Kết thúc .header-left -->

                <div class="header-right">
                    <i class="la la-lightbulb-o"></i>
                    <p>MOLLA Giảm giá lên đến 30%</span></p>
                </div>
            </div><!-- Kết thúc .container -->
        </div><!-- Kết thúc .header-bottom -->
    </header><!-- Kết thúc .header -->
    <?php require_once $view ?>
    <footer class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <h4 class="widget-title">Về Molla</h4><!-- Kết thúc .widget-title -->
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna
                                eros eu erat. </p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Youtube" target="_blank"><i
                                            class="icon-youtube"></i></a>
                            </div><!-- Kết thúc .soial-icons -->
                        </div><!-- Kết thúc .widget about-widget -->
                    </div><!-- Kết thúc .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Liên kết hữu ích</h4><!-- Kết thúc .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">Về Molla</a></li>
                                <li><a href="#">Cách mua hàng trên Molla</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Liên hệ chúng tôi</a></li>
                                <li><a href="login.html">Đăng nhập</a></li>
                            </ul><!-- Kết thúc .widget-list -->
                        </div><!-- Kết thúc .widget -->
                    </div><!-- Kết thúc .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Dịch vụ khách hàng</h4><!-- Kết thúc .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Phương thức thanh toán</a></li>
                                <li><a href="#">Cam kết hoàn tiền!</a></li>
                                <li><a href="#">Đổi trả hàng</a></li>
                                <li><a href="#">Vận chuyển</a></li>
                                <li><a href="#">Điều khoản và điều kiện</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                            </ul><!-- Kết thúc .widget-list -->
                        </div><!-- Kết thúc .widget -->
                    </div><!-- Kết thúc .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Tài khoản của tôi</h4><!-- Kết thúc .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Đăng nhập</a></li>
                                <li><a href="cart.html">Xem giỏ hàng</a></li>
                                <li><a href="#">Danh sách mong muốn của tôi</a></li>
                                <li><a href="#">Theo dõi đơn hàng của tôi</a></li>
                                <li><a href="#">Trợ giúp</a></li>
                            </ul><!-- Kết thúc .widget-list -->
                        </div><!-- Kết thúc .widget -->
                    </div><!-- Kết thúc .col-sm-6 col-lg-3 -->
                </div><!-- Kết thúc .row -->
            </div><!-- Kết thúc .container -->
        </div><!-- Kết thúc .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <figure class="footer-payments">
                    <img src="../../assets/images/payments.png" alt="Phương thức thanh toán" width="272" height="20">
                </figure><!-- Kết thúc .footer-payments -->
                <img src="../../assets/images/demos/demo-6/logo-footer.png" alt="Logo Molla" width="82" height="25">
                <p class="footer-copyright">Bản quyền © 2019 Cửa hàng Molla. Đã đăng ký Bản quyền.</p>
                <!-- Kết thúc .footer-copyright -->
            </div><!-- Kết thúc .container -->
        </div><!-- Kết thúc .footer-bottom -->
    </footer><!-- Kết thúc .footer -->
</div><!-- Kết thúc .page-wrapper -->
<button id="scroll-top" title="Trở lại đầu trang"><i class="icon-arrow-up"></i></button>

<!-- Menu di động -->
<div class="mobile-menu-overlay"></div><!-- Kết thúc .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Tìm kiếm</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Tìm kiếm..."
                   required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <!-- Các mục menu di động -->
            </ul>
        </nav><!-- Kết thúc .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- Kết thúc .social-icons -->
    </div><!-- Kết thúc .mobile-menu-wrapper -->
</div><!-- Kết thúc .mobile-menu-container -->

<!-- Tập lệnh JS của Plugins -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.hoverIntent.min.js"></script>
<script src="../../assets/js/jquery.waypoints.min.js"></script>
<script src="../../assets/js/superfish.min.js"></script>
<script src="../../assets/js/owl.carousel.min.js"></script>
<script src="../../assets/js/bootstrap-input-spinner.js"></script>
<script src="../../assets/js/jquery.plugin.min.js"></script>
<script src="../../assets/js/jquery.magnific-popup.min.js"></script>
<script src="../../assets/js/jquery.countdown.min.js"></script>
<!-- Tập lệnh JS chính -->
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/demos/demo-6.js"></script>
</body>

<!-- molla/index-6.html  22 Nov 2019 09:56:39 GMT -->
</html>

