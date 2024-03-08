<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Bài viết</h1>
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
            </ol>
        </div><!-- Kết thúc .container -->
    </nav><!-- Kết thúc .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <?php
                    $outerLimit = 8;
                    $outerCount = 0;
                    foreach ($posts as $bt):
                        if ($outerCount >= $outerLimit) :
                            break;
                        endif;
                        $outerCount++;
                        ?>
                        <article class="entry entry-list">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <figure class="entry-media">
                                        <a href="/?act=baivietone&id=<?=$bt['id']?>">
                                            <img src="<?= $bt['hinhAnh'] ?>" alt="mô tả ảnh">
                                        </a>
                                    </figure><!-- Kết thúc .entry-media -->
                                </div><!-- Kết thúc .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="entry-body">
                                        <div class="entry-meta">
                                        <span class="entry-author">
                                            <a href="#">Ngày đăng : </a>
                                        </span>
                                            <span class="meta-separator">|</span>
                                            <a href="#"><?= $bt['ngayDang'] ?></a>
                                            <span class="meta-separator">|</span>
                                        </div><!-- Kết thúc .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="single.html"><?= $bt['tieuDe'] ?></a>
                                        </h2><!-- Kết thúc .entry-title -->

                                        <div class="entry-content">
                                            <p><?= substr($bt['noiDung'], 0, 100) ?></p>
                                            <a href="/?act=baivietone&id=<?=$bt['id']?>" class="read-more">Xem bài viết</a>
                                        </div><!-- Kết thúc .entry-content -->
                                    </div><!-- Kết thúc .entry-body -->
                                </div><!-- Kết thúc .col-md-7 -->
                            </div><!-- Kết thúc .row -->
                        </article><!-- Kết thúc .entry -->
                    <?php endforeach; ?>
                </div><!-- Kết thúc .col-lg-9 -->

                <aside class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <h3 class="widget-title">Tìm Kiếm</h3><!-- Kết thúc .widget-title -->

                            <form action="#">
                                <label for="ws" class="sr-only">Tìm kiếm trong blog</label>
                                <input type="search" class="form-control" name="ws" id="ws" placeholder="Tìm kiếm trong blog" required>
                                <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Tìm kiếm</span></button>
                            </form>
                        </div><!-- Kết thúc .widget -->
                        <div class="widget">
                            <h3 class="widget-title">Bài Viết Phổ Biến</h3><!-- Kết thúc .widget-title -->

                            <ul class="posts-list">
                                <?php
                                $limit = 8;
                                $count = 0;
                                foreach ($posts as $bv):
                                    if ($count >= $limit) :
                                        break;
                                    endif;
                                    $count++;
                                    ?>
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

                    </div><!-- Kết thúc .sidebar -->
                </aside><!-- Kết thúc .col-lg-3 -->
            </div><!-- Kết thúc .row -->
        </div><!-- Kết thúc .container -->
    </div><!-- Kết thúc .page-content -->
</main><!-- Kết thúc .main -->
