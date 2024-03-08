<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title" >Danh sách sản phẩm yêu thích</h1>
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Cửa hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách yêu thích</li>
            </ol>
        </div><!-- Kết thúc .container -->
    </nav><!-- Kết thúc .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <table class="table table-wishlist table-mobile">
                <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Tình trạng hàng tồn</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($spyt as $yt): ?>
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="/?act=chitietsp&id=<?= $yt['id'] ?>">
                                    <img src="<?= $yt['hinhAnh'] ?>" alt="Hình ảnh sản phẩm">
                                </a>
                            </figure>
                            <h3 class="product-title">
                                <a href="#"><?= $yt['ten_san_pham'] ?></a>
                            </h3><!-- Kết thúc .product-title -->
                        </div><!-- Kết thúc .product -->
                    </td>
                    <td class="price-col"><?= $yt['gia'] ?></td>
                    <td class="stock-col"><span class="in-stock"><?php if($yt['trangThai']==1) echo 'Chưa thuê'; else echo'Đã thuê'; ?></span></td>
                    <form action="/?act=xoaspyt" method="post">
                        <input type="hidden" id="idtk" name="idtk" value="<?= $yt['idtk'] ?>">
                        <input type="hidden" id="idsp" name="idsp" value="<?= $yt['id'] ?>">
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </form>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table><!-- Kết thúc .table table-wishlist -->
            <div class="wishlist-share">
                <div class="social-icons social-icons-sm mb-2">
                    <label class="social-label">Chia sẻ trên:</label>
                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div><!-- Kết thúc .soial-icons -->
            </div><!-- Kết thúc .wishlist-share -->
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .page-content -->
</main><!-- Kết thúc .main -->
