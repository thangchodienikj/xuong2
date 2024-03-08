<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="">Cửa hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm chi tiết</li>
            </ol>

        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="<?= $productone['hinhAnh'] ?>" alt="product image"
                                         style="height: 680px">
                                </figure><!-- End .product-main-image -->
                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    <?php
                                    $array = explode(',', $productone['anh_phu']);
                                    foreach ($array as $anh):
                                        echo '
                                          <a class="product-gallery-item " href="" data-image="' . $anh . '" >
                                          <img src="' . $anh . '" alt="product side">
                                          </a>';
                                    endforeach; ?>
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title"><?= $productone['ten_san_pham'] ?></h1><!-- End .product-title -->
                            <br>
                            <div class="product-price">
                                <?= $productone['gia'] ?> VNĐ
                            </div><!-- End .product-price -->
                            <br>
                            <div class="product-content">
                                <p><?= substr($productone['moTa'], 0, 200) ?></p>
                            </div><!-- End .product-content -->
                            <br>
                            <div class="product-content"><h6
                                        style="color: <?php echo ($productone['trangThai'] == 2) ? 'red' : 'deepskyblue'; ?>;">
                                    Trang thái:
                                    <?php echo ($productone['trangThai'] == 2) ? 'Đã thuê' : 'Chưa thuê'; ?>
                                </h6>
                            </div><!-- End .product-content -->
                            <br>
                            <div class="details-filter-row details-row-size">
                                <input type="hidden" name="idsp" value="'.$ProductID.'">
                                <?php
                                if (isset($_SESSION['userxuong'])) {
                                    ?>
                                    <div class="product-details-action">
                                        <div>
                                            <a href="/?act=lienhe&idsp=<?= $productone['id'] ?>"
                                               class="btn  btn-outline-primary">
                                                <span>Liên hệ</span>
                                            </a>
                                        </div><!-- End .details-action-wrapper -->
                                        <div class="details-action-wrapper">
                                            <a href="/?act=sanphamyt&idsp=<?= $productone['id'] ?>&idtk=<?= $_SESSION['userxuong']['id'] ?>"
                                               class="btn-product btn-wishlist"
                                               title="Wishlist"><span>Yêu thích</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- Kết thúc .product-details-action -->
                                    <?php
                                } else {
                                    ?>
                                    <div class="product-details-action">
                                        <a href="/?act=lienhe&idsp=<?= $productone['id'] ?>"
                                           class="btn btn-outline-primary">
                                            <span>Liên hệ</span>
                                        </a>
                                        <div class="details-action-wrapper">
                                            <a href="/?act=tkmk" class="btn-product btn-wishlist"
                                               title="Wishlist"><span>Yêu thích</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- Kết thúc .product-details-action -->
                                    <?php
                                }
                                ?>
                            </div><!-- End .product-details-action -->
                            <div class="product-details-footer">
                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Chia sẻ:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                                class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->
            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                           role="tab" aria-controls="product-desc-tab" aria-selected="true">

                            Bình luận </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab"
                           aria-controls="product-info-tab" aria-selected="false">
                            Mô tả chi tiết
                        </a>
                    </li>
                </ul>
                <style>
                    /* Add your styles here */
                    .review-container {
                        height: 300px; /* Set the desired height */
                        overflow-y: auto; /* Enable vertical scrollbar when content overflows */
                        padding: 10px; /* Optional: Add padding for better spacing */
                    }
                </style>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                         aria-labelledby="product-desc-link">
                        <div class="reviews">
                            <h3>
                                Bình luận</h3>
                            <div class="review-container">
                                <?php foreach ($binhluan as $bl):
                                    extract($bl);
                                    ?>
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#" style=" font-size: 18px;"><?= $bl['taikhoan'] ?></a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date"
                                                  style=" font-size: 15px;"><?= $bl['danhgia'] ?></span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4 style=" font-size: 15px;"><?= $bl['ngaybinhluan'] ?></h4>
                                            <div class="review-content">
                                                <p style=" font-size: 15px;"><?= $bl['camnhan'] ?></p>
                                            </div><!-- End .review-content -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                    <br>
                                <?php endforeach; ?>
                            </div><!-- End .review-container -->
                            <br>
                            <br>
                            <form action="/?act=binhluan" method="post">
                                <div class="comment-form">
                                    <h3>Thêm một bình luận</h3>
                                    <?php if (isset($_SESSION['userxuong'])):
                                        extract($_SESSION['userxuong']);
                                        ?>
                                        <input type="hidden" name="name" value="<?= $_SESSION['userxuong']['taiKhoan'] ?>">
                                    <?php endif; ?>
                                    <input type="hidden" name="id" value="<?= $productone['id'] ?>">
                                    <div class="form-row">
                                        <label class="form-group col-2 ">
                                            Đánh giá :</label><br>
                                        <div class="form-group col-8">
                                            <div class="form-check col-3 form-check-inline">
                                                <input type="radio" id="rating-good" name="rating" value="Rất tuyệt"
                                                       class="form-check-input" required>
                                                <label for="rating-good" class="form-check-label">
                                                    Rất tuyệt</label>
                                            </div>
                                            <div class="form-check col-3 form-check-inline">
                                                <input type="radio" id="rating-normal" name="rating" value="Bình thường"
                                                       class="form-check-input" required>
                                                <label for="rating-normal" class="form-check-label">
                                                    Bình thường</label>
                                            </div>
                                            <div class="form-check col-3 form-check-inline">
                                                <input type="radio" id="rating-bad" name="rating" value="Tệ"
                                                       class="form-check-input" required>
                                                <label for="rating-bad" class="form-check-label">
                                                    Tệ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="comment-text">
                                        Bình luận của bạn:</label>
                                    <div class="form-row">
                                        <div class="form-group col-10">
                                            <input id="comment-text" name="binhluan" class="form-control" required>
                                        </div>
                                        <div class="form-group col-0">
                                            <?php if (isset($_SESSION['userxuong'])) {
                                                extract($_SESSION['userxuong']);
                                                echo '<input type="submit" class="btn btn-primary" value="Đăng một bình luận" name="gui">';
                                            } else {
                                                echo '<input type="submit" class="btn btn-primary disabled" value="Đăng một bình luận" name="gui">';
                                            } ?>
                                        </div>
                                    </div>
                            </form>
                        </div><!-- End .comment-form -->
                    </div><!-- End .reviews -->

                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                     aria-labelledby="product-info-link">
                    <div class="product-desc-content">
                        <h3>Chi tiết sản phẩm</h3>
                        <p><?=$productone['moTa']?></p>
                    </div><!-- Kết thúc .product-desc-content -->

                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .product-details-tab -->
        <h2 class="title text-center mb-4">Bạn cũng có thể thích</h2><!-- End .title text-center -->
        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
             data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
            <?php foreach ($product as $sp):
                extract($sp); ?>
                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="index.php?act=sanphamct&idpro=' . $sp['id'] . '">
                            <img src="<?= $sp['hinhAnh'] ?> ?> '" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action-vertical">
                            <?php
                            if (isset($_SESSION['userxuong'])) :
                                extract($_SESSION['userxuong']);
                                ?>
                                <a href="/?act=sanphamyt&idsp=<?= $sp['id'] ?>&idtk=<?= $_SESSION['userxuong']['id'] ?>"
                                   class="btn-product-icon btn-wishlist btn-expandable"><span>Yêu thích</span></a>
                            <?php endif; ?>

                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="/?act=chitietsp&id=<?= $sp['id'] ?>" class="btn-product "><span>
                                Xem chi tiết</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <?php
                        foreach ($listCategory as $dm) :
                            extract($dm);
                            if ($dm['id'] == $sp['idDanhMuc']) :
                                ?>
                                <a href="#"><?= $dm['ten'] ?></a>
                            <?php
                            endif;
                        endforeach;
                        ?>
                        <h3 class="product-title"><?= $sp['ten_san_pham'] ?></h3><!-- End .product-title -->
                        <div class="product-price">
                            <?= $sp['gia'] ?>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                        </div><!-- End .rating-container -->
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
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            <?php endforeach; ?>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->




