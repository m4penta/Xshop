<div class="row mb">
    <div class="box-title">TÀI KHOẢN</div>
    <div class="box-content formtaikhoan">
        <?php 
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        ?>
        <div class="row mb10">
                Xin chào<br />
            <?=$user?>
            </div>

            <div class="row mb10">
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li> 
            <li><a href="admin/index.php">Đăng nhập Admin</a></li> 
            <li><a href="index.php?act=thoat">Thoát</a></li> 

            </div>
        <?php 
        }else{
        ?>
        <form action="index.php?act=dangnhap" method="post">

            <div class="row mb10">
                Tên đăng nhập<br />
                <input type="text" name="user"  />
            </div>

            <div class="row mb10">
                mật khẩu <br />
                <input type="password" name="pass"  />
            </div>

            <div class="row mb10">
                <input type="checkbox" style="margin-bottom: 0px;" name="user"  />
                <label for="">Ghi nhớ tài khoản ?</label>
            </div>

            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap" />
            </div>

        </form>
        <li><a href="#">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
        <?php }?>
    </div>
</div>
<div class="row mb">
    <div class="box-title">DANH MỤC</div>
    <div class="box-content2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=".$id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
            <!-- <li><a href="#">Đồng hồ đeo tay</a> </li>
                    <li><a href="#">Máy tính xách tay </a></li>
                    <li><a href="#">Máy ảnh</a></li>
                    <li><a href="#">Điện thoại</a> </li>
                    <li><a href="#">Nước hoa</a></li>
                    <li><a href="#">Nữ trang </a></li>
                    <li><a href="#">Nón thời trang </a></li>
                    <li><a href="#">Túi xách du </a></li>
                    <li><a href="#">New catalog</a></li>
                    <li><a href="#">Apple 2023</a></li> -->
        </ul>
    </div>
    <div class="box-footer searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="Tìm kiếm" placeholder="Từ khóa tìm kiếm ">
        </form>
    </div>
</div>
<div class="row">
    <div class="box-title">TOP 10 YÊU THÍCH</div>
    <div class="row box-content">
        <?php

        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanpham&idsp=".$id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10"><a href="' . $linksp . '" style = "text-decoration: none;">
        <img src="' . $img . '" alt=""></a>
        <a href="' . $linksp . '">' . $name . '</a>
        </div>';
        }
        ?>
        <!-- <div class="row mb10 top10">
                    <img src="view/images/products/1005.jpg" alt="">
                    <a href="#">Sir Rodney's Marmalade</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/products/1001.jpg" alt="">
                    <a href="#">Cate De Blaye </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/products/1017.jpg" alt="">
                    <a href="#">Tharinger RostbratWurst</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/products/1009.jpg" alt="">
                    <a href="#">Mishi Kobe Niku</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/products/1013.jpg" alt="">
                    <a href="#">Camarvon Tigers </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/products/1014.jpg" alt="">
                    <a href="#">Raclette Courdavault </a>
                </div> -->


    </div>
</div>