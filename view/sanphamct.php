<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="box-title"><?= $name ?></div>

            <div class="row box-content">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb spct"><img src="' . $img . '"></div><br>';
                echo $mota;
                ?>
            </div>
        </div>
        <div class="row">

            <div class="box-title"> BÌNH LUẬN</div>
            <div class="row box-content">
            </div>
        </div>
        <div class="row">
            <div class="box-title"> SẢN PHẨM CÙNG LOẠI</div>
            <div class="row box-content">
                <?php
                foreach($sp_cung_loai as $sp_cung_loai){
                    extract($sp_cung_loai);
                    $linksp ="index.php?act=sanphamct&idsp=".$id;
                    echo'<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
                
                ?>
                
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "./view/boxright.php";
        ?>
    </div>