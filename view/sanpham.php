<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="box-title">
            SẢN PHẨM <strong> <?php echo $tendm; ?></strong>
          </div>
            <div class="row box-content">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                  extract($sp);
                  $linksp = "index.php?act=sanphamczt&idsp=".$id;
                  $hinh = $img_path.$img;
                  if (($i == 2) || ($i == 5) ||($i == 8) || ($i == 11)) {
                    $mr = "";
                  } else {
                    $mr = "mr";
                  }
                  echo '<div class="boxsp '.$mr.'">
                        <div class="row img"><a href="'.$linksp.'" style = "text-decoration: none;"><img src="'.$hinh.'"/></a></div>
                        <p>$'.$price.'</p>
                        <a href="'.$linksp.'" style = "text-decoration: none;">'.$name.'</a>
                  </div>';
                  $i += 1;
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
    </div>
    