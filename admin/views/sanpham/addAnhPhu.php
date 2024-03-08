<main class="main text-center" style="width: 78%; margin: 0 auto;">
    <div class="mb">
        <br>
        <div class="box_title" style="font-size: 25px">Ảnh phụ sản phẩm </div> <br>
        <div class="box_content form_account">
            <form action="/admin/?act=addImages" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="masp" class="form-label">Chọn sản phẩm : </label>
                    <select class="form-select" name="id">
                        <?php
                        foreach ($Product as $sanpham){
                            extract($sanpham);
                            echo "<option value=".$id.">$ten</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anh1">Ảnh phụ:</label>
                    <input type="file" class="form-control" name="hinh" id="hinh">
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary" name="themmoi">Thêm Ảnh</button>
                <a href="/admin/?act=addProduct" class="btn btn-info">Thêm sản phẩm</a>
                <a href="/admin/?act=listImage" class="btn btn-info">Danh sách ảnh</a>
            </form>
            <br>
            <br/>
        </div>
    </div>
</main>
