<?php
if(is_array($sanpham)){
    extract($sanpham);
}



?>

<div class="contentr">
    <div class="dangxuat">
        <input type="submit" value="Dang xuat">
    </div>

    <div class="contentdow">
        <div class="title">
            Sửa Sản Phẩm
        </div>
        <div class="element-button">

            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <label for="">Tên sản phẩm</label><br>
                    <input type="text" name="product_name" value="<?php echo $sanpham['product_name'] ?>"><br>
                    <label for="">đơn giá</label><br>
                    <input type="number" name="product_price" value="<?php echo $sanpham['product_price'] ?>"><br>
                    <label for="">Giảm giá</label><br>
                    <input type="number" name="discount" value="<?php echo $sanpham['discount'] ?>"><br>

                    <label for="">Ảnh sản phẩm</label><br>
                    <input type="file" name="product_img" id="product_img" value="<?php echo $sanpham['product_img'] ?>"><br>

                    <label for="">mota</label><br>
                    <textarea name="origin" id="" cols="30" rows="10" value="<?php echo $sanpham['origin'] ?>"></textarea><br>

                    <label for="">số lượt xem</label><br>
                    <input type="number" name="view" value="<?php echo $sanpham['view'] ?>" ><br>
                </div>
                <div class="but">
                    <input type="hidden" name="id" value=" <?php echo $sanpham['id'] ?>">
                    <input type="submit" name="capnhat" value="Cập Nhật">
                    <input type="reset" value="Nhaplai">
                    <a href="index.php?act=listdssp"><input type="button" value="Danh Sách">


                </div>

                <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
            </form>
        </div>





    </div>


</div>
</div>

</div>