<div class="row">
            <div class="row formtitle">
            <H1> DANH SÁCH LOẠI HÀNG </H1> 
            </div>
            <div class="row formcontend">

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <td></td>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listsanpham as $sanpham) {
                            extract($danhmuc);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;


                            echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$img.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"> </a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                            </tr>'; 
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả ">
                    <input type="button" value="Xóa các mục đã chọn">
                   <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm "></a>
                </div>
            </div>
        </div>
