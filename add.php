

<div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
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
                                        <div class="form-group">
                                        <label for="">Tên Sản phẩm </label><br>
                                            <input type="text " class="form-control form-control-user"
                                                aria-describedby="emailHelp"  name="product_name" >
                                                 
                                        </div>
                                        <div class="form-group">
                                        <label for="">Đơn giá</label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="product_price">
                                        </div>
                                        <div class="form-group">
                                        <label for="">Giảm giá</label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="discount">
                                        </div>
                                        
                                        <label for=""> Ảnh sản phẩm</label><br>
                                            <input type="file" name="product_img" id="product_img">
                                            <div class="form-group">
                                            
                                        <label for="">mota</label><br>
                                        <textarea name="origin" id="" cols="60" rows="5"></textarea><br>
                                                            
                                        

                                        <div class="form-group">
                                        <label for="">Số lượt xem </label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="view">
                                        </div>
                                        
                                        
                                        <input type="submit"  name="themmoi" class="btn btn-google btn-user btn-block" value="Thêm Mới">
                                        <a href="index.php?act=listdssp" class="btn btn-facebook btn-user btn-block">
                                            Danh Sách
                                        </a>
                                        <?php
                                        if(isset($thongbao)&&($thongbao!=""))
                                        echo $thongbao;
                                            
                                            ?>
                                        
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                    </div>