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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script>
          $(document).ready(function(){
             $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>}); }); 
             </script>
        <div class="row" id="binhluan">
            
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