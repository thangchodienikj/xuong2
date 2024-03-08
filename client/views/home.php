<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                        "dots": false,
                        "nav": false,
                        "responsive": {
                            "992": {
                                "nav": true
                            }
                        }
                    }'>
            <div class="intro-slide" style="background-image: url(../../assets/images/demos/demo-6/slider/anh3.png);">
            </div><!-- Kết thúc .intro-slide -->

            <div class="intro-slide"
                 style="background-image: url(../../assets/images/demos/demo-6/slider/slide-2.jpg);">
            </div><!-- Kết thúc .intro-slide -->
        </div><!-- Kết thúc .intro-slider owl-carousel owl-theme -->

        <span class="slider-loader"></span><!-- Kết thúc .slider-loader -->
    </div><!-- Kết thúc .intro-slider-container -->

    <div class="pt-2 pb-3">
        <div class="container">
            <div class="row">
                <?php
                $limit = 2;
                $count = 0;
                foreach ($product as $sp) :
                    if ($count >= $limit) :
                        break;
                    endif;
                    $count++;
                    ?>
                    <div class="col-sm-6">
                        <div class="banner banner-overlay">
                            <a href="/?act=chitietsp&id=<?= $sp['id'] ?>">
                                <img src="<?= $sp['hinhAnh'] ?>" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h4 class="banner-subtitle text-white"><a href="#">Mới</a></h4>
                                <!-- Kết thúc .banner-subtitle -->
                                <!-- Kết thúc .banner-title -->
                                <a href="/?act=chitietsp&id=<?= $sp['id'] ?>"
                                   class="btn btn-outline-white banner-link underline">Xem ngay</a>
                            </div><!-- Kết thúc .banner-content -->
                        </div><!-- Kết thúc .banner -->
                    </div><!-- Kết thúc .col-sm-6 -->
                <?php endforeach; ?>
            </div><!-- Kết thúc .row -->
            <hr class="mt-0 mb-0">
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .bg-gray -->

    <div class="mb-5"></div><!-- Kết thúc .mb-5 -->

    <div class="mb-5"></div><!-- Kết thúc .mb-5 -->

    <div class="deal bg-image pt-8 pb-8" style="background-image: url(../../assets/images/demos/demo-6/deal/anh2.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="deal-content text-center">
                        <h4>
                            KHỐI LƯỢNG HẠN CHẾ. </h4>
                        <h2>ƯU ĐÃI TRONG NGÀY</h2>
                        <div class="deal-countdown" data-until="+240h"></div><!-- Kết thúc .deal-countdown -->
                    </div><!-- Kết thúc .deal-content -->
                    <div class="row deal-products">
                        <?php
                        $limit = 2;
                        $count = 0;
                        foreach ($product as $sp) :
                            if ($count >= $limit) :
                                break;
                            endif;
                            $count++;
                            ?>
                            <div class="col-6 deal-product text-center">
                                <figure class="product-media">
                                    <a href="/?act=chitietsp&id=<?= $sp['id'] ?>">
                                        <img src="<?= $sp['hinhAnh'] ?>" alt="Product image"
                                             class="product-image">
                                    </a>
                                </figure><!-- Kết thúc .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"><?= $sp['ten_san_pham'] ?></a></h3>
                                    <!-- Kết thúc .product-title -->
                                    <div class="product-price">
                                        <span class="new-price"><?= $sp['gia'] ?></span>
                                    </div><!-- Kết thúc .product-price -->
                                </div><!-- Kết thúc .product-body -->
                                <a href="/?act=chitietsp&id=<?= $sp['id'] ?>" class="action">Xem ngay</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div><!-- Kết thúc .col-lg-5 -->
            </div><!-- Kết thúc .row -->
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .deal -->

    <div class="pt-4 pb-3" style="background-color: #222;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Thanh toán và Giao hàng</h3><!-- Kết thúc .icon-box-title -->
                            <p>Miễn phí giao hàng cho đơn hàng trên $50</p>
                        </div><!-- Kết thúc .icon-box-content -->
                    </div><!-- Kết thúc .icon-box -->
                </div><!-- Kết thúc .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rotate-left"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Đổi trả & Hoàn tiền</h3><!-- Kết thúc .icon-box-title -->
                            <p>Đảm bảo hoàn tiền 100%</p>
                        </div><!-- Kết thúc .icon-box-content -->
                    </div><!-- Kết thúc .icon-box -->
                </div><!-- Kết thúc .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-unlock"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Thanh toán An toàn</h3><!-- Kết thúc .icon-box-title -->
                            <p>Thanh toán 100% an toàn</p>
                        </div><!-- Kết thúc .icon-box-content -->
                    </div><!-- Kết thúc .icon-box -->
                </div><!-- Kết thúc .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-headphones"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Hỗ trợ chất lượng</h3><!-- Kết thúc .icon-box-title -->
                            <p>Hỗ trợ trực tuyến 24/7</p>
                        </div><!-- Kết thúc .icon-box-content -->
                    </div><!-- Kết thúc .icon-box -->
                </div><!-- Kết thúc .col-lg-3 col-sm-6 -->
            </div><!-- Kết thúc .row -->
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .bg-light pt-2 pb-2 -->

    <div class="mb-6"></div><!-- Kết thúc .mb-5 -->

    <div class="container">
        <h2 class="title text-center mb-4">Sản Phẩm</h2><!-- Kết thúc .title text-center -->
        <div class="products">
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <?php
                    $outerLimit = 8;
                    $outerCount = 0;
                    foreach ($product as $sp) :
                        if ($outerCount >= $outerLimit) :
                            break;
                        endif;
                        $outerCount++;
                        ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="/?act=chitietsp&id=<?= $sp['id'] ?>">
                                    <img src="<?= $sp['hinhAnh'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <?php
                                    if (isset($_SESSION['userxuong'])) :
                                        extract($_SESSION['userxuong']);
                                        ?>
                                        <a href="/?act=sanphamyt&idsp=<?= $sp['id'] ?>&idtk=<?= $_SESSION['userxuong']['id'] ?>"
                                           class="btn-product-icon btn-wishlist btn-expandable"><span>Yêu thích</span></a>
                                    <?php endif; ?>
                                </div><!-- Kết thúc .product-action-vertical -->

                                <div class="product-action">
                                    <a href="/?act=chitietsp&id=<?= $sp['id'] ?>"
                                       class="btn-product"><span>Xem chi tiết</span></a>
                                </div><!-- Kết thúc .product-action -->
                            </figure><!-- Kết thúc .product-media -->
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#"><?= $sp['ten_danh_muc'] ?></a>
                                </div><!-- Kết thúc .product-cat -->
                                <h3 class="product-title"><a href="product.html"><?= $sp['ten_san_pham'] ?></a></h3>
                                <!-- Kết thúc .product-title -->
                                <div class="product-price">
                                    <?= $sp['gia'] ?>
                                </div><!-- Kết thúc .product-price -->

                                <div class="product-nav product-nav-thumbs">
                                    <?php
                                    $limit = 3;
                                    $count = 0;
                                    $array = explode(',', $sp['anh_phu']);
                                    foreach ($array as $anh) :
                                        if ($count >= $limit) :
                                            break;
                                        endif;
                                        $count++;
                                        ?>
                                        <a href="#" class="active">
                                            <img src="<?= $anh ?>" alt="product desc">
                                        </a>
                                    <?php endforeach; ?>
                                </div><!-- Kết thúc .product-nav -->
                            </div><!-- Kết thúc .product-body -->
                        </div><!-- Kết thúc .product -->
                    </div><!-- Kết thúc .col-sm-6 col-md-4 col-lg-3 -->
                <?php endforeach; ?>
            </div><!-- Kết thúc .row -->
        </div><!-- Kết thúc .products -->
    </div><!-- Kết thúc .container -->

    <div class="mb-2"></div><!-- Kết thúc .mb-5 -->

    <div class="container">
    </div><!-- Kết thúc .container -->

    <div class="blog-posts mb-5">
        <div class="container">
            <h2 class="title text-center mb-4">Bài viết</h2><!-- Kết thúc .title text-center -->

            <div class="owl-carousel owl-simple mb-3" data-toggle="owl"
                 data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                <?php
                $limit = 6;
                $count = 0;
                foreach ($posts as $bt) :
                    if ($count >= $limit) :
                        break;
                    endif;
                    $count++;
                    ?>
                    <article class="entry">
                        <figure class="entry-media">
                            <a href="/?act=baivietone&id=<?= $bt['id'] ?>">
                                <img src="<?= $bt['hinhAnh'] ?>" alt="image desc" style="width: 376px;height: 250px">
                            </a>
                        </figure><!-- Kết thúc .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>, 1 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html"><?= $bt['tieuDe'] ?></a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="/?act=baivietone&id=<?= $bt['id'] ?>" class="read-more">Đọc thêm</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                <?php  endforeach; ?>
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .blog-posts -->
</main><!-- End .main -->
