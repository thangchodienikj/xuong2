<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bài viết </li>
            </ol>
        </div><!-- Kết thúc .container -->
    </nav><!-- Kết thúc .breadcrumb-nav -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="entry single-entry">
                        <figure class="entry-media">
                            <img src="<?= $postsone['hinhAnh'] ?>" alt="mô tả ảnh">
                        </figure><!-- Kết thúc .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    <a href="#">Ngày đăng</a>
                                </span>
                                <span class="meta-separator">:</span>
                                <a href="#"><?= $postsone['ngayDang'] ?></a>
                            </div><!-- Kết thúc .entry-meta -->

                            <h2 class="entry-title">
                                <?= $postsone['tieuDe']?>
                            </h2><!-- Kết thúc .entry-title -->


                            <div class="entry-content editor-content">
                                <p><?= $postsone['noiDung']?></p>
                            </div><!-- Kết thúc .entry-body -->

                    </article><!-- Kết thúc .entry -->

                </div><!-- Kết thúc .col-lg-9 -->

                <aside class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <h3 class="widget-title">Tìm Kiếm</h3><!-- Kết thúc .widget-title -->

                            <form action="#">
                                <label for="ws" class="sr-only">Tìm kiếm trong blog</label>
                                <input type="search" class="form-control" name="ws" id="ws" placeholder="Tìm kiếm bài viết"
                                       required>
                                <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Tìm kiếm</span>
                                </button>
                            </form>
                        </div><!-- Kết thúc .widget -->

                        <div class="widget">
                            <h3 class="widget-title">
                                Bài Viết Phổ Biến</h3><!-- Kết thúc .widget-title -->

                            <ul class="posts-list">
                                <?php foreach ($posts as $bv): ?>
                                    <li>
                                        <figure>
                                            <a href="/?act=baivietone&id=<?=$bv['id']?>">
                                                <img src="<?=$bv['hinhAnh']?>" alt="bài viết">
                                            </a>
                                        </figure>

                                        <div>
                                            <span><?=$bv['ngayDang']?></span>
                                            <h4><a href="/?act=baivietone&id=<?=$bv['id']?>"><?=$bv['tieuDe']?></a></h4>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul><!-- Kết thúc .posts-list -->
                        </div><!-- Kết thúc .widget -->
                    </div><!-- Kết thúc .sidebar sidebar-shop -->
                </aside><!-- Kết thúc .col-lg-3 -->
            </div><!-- Kết thúc .row -->
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .page-content -->
</main><!-- Kết thúc .main -->
