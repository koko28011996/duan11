<div class="contentr">
    <div class="dangxuat">
        <input type="submit" value="Dang xuat">
    </div>

    <div class="contentdow">
        <div class="title">
            Thêm sản phẩm mới
        </div>
        <div class="element-button">

            <form action="index.php?act=sp" method="post" enctype="multipart/form-data">
                <div class="label">
                    <select name="id_sectors" id=""><br>
                        <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.'</option>';
                                }
                                ?>

                    </select><br>
                    <label for="">Tên sản phẩm</label><br>
                    <input type="text" name="product_name"><br>
                    <label for="">đơn giá</label><br>
                    <input type="number" name="product_price"><br>
                    <label for="">Giảm giá</label><br>
                    <input type="number" name="discount"><br>

                    <label for="">Ảnh sản phẩm</label><br>
                    <input type="file" name="product_img" id="product_img"><br>

                    <label for="">mota</label><br>
                    <textarea name="origin" id="" cols="30" rows="10"></textarea><br>

                    <label for="">số lượt xem</label><br>
                    <input type="number" name="view"><br>
                </div>
                <div class="but">
                    <input type="submit" name="themmoi" value="Thêm Mới">
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