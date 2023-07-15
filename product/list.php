 <div class="contentr">
                <div class="dangxuat">
                    <input type="submit" value="Dang xuat"></div>
                
                <div class="contentdow">
                    <div class="title">
                        Danh sách sản phẩm
                    </div>
                    <div class="element-button">
                        <form action="index.php?act=listdssp" method="post" enctype="multipart/form-data">
                        <input type="text" name="pm">
                            <select name="id_sectors">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                  foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.'</option>';
                                }
                                ?>
                            </select>
                            <input type="submit" name="listok" value="Tim kiem">
                          
                        
                        </form>
                        <div class="talble">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên san phẩm</th>
                                <th>Đơn giá</th>
                                <th>Gia Gia</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Số lượt xem</th>
                                <th>Ngày Đăng</th>
                                <th>Công cụ</th>
                            </tr>
                            <?php

                            foreach($listsanpham as $sp){
                                extract($sp);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="name[]" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$product_name.'</td>
                                <td>'.$product_price.'</td>
                                <td>'.$discount.'</td>
                                <td><img src="'.$product_img.'" style="width: 100px;" alt=""></td>
                                <td>'.$origin.'</td>
                                <td>'.$view.'</td>
                                <td>'.$date.'</td>
                                <td>
                                     <a href="'.$suasp.'">
                                    <input type="button" value="Sua"></a>
                                    <a href="'.$xoasp.'" >
                                    <input type="button" value="Xoa"></a>
                                </td>
                            </tr>';

                            }
                            ?>

                            
                            

                            
                        </table>
                        <div class="but">
                        <input type="submit"  name="all" value="Chọn tất cả"> 
                        <input type="submit"  name="one" value="Bỏ chọn tất cả"> 
                        <a href="index.php?act=sp"><input type="button" value="Thêm Sản Phẩm mới"> 
                        </div>

                           

                        </div>
                       

                     
                    </div>
                        

                    </div>
                </div>

            </div>