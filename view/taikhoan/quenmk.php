<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
    
            <div class="box-title">QUÊN MẬT KHẨU</div>

            <div class="row box-content formtaikhoan">
             <form action="index.php?act=quenmk" method="post">
                <div class="row mb10">
                    Email
                <input type="email" name="email">
                </div>
                
                <input type="submit" value="Gửi" name="guiemail">
                <input type="reset" value="nhập lại">
                </div>
             </form>
             <h2 class="thongbao">
             <?php 
             if(isset($thongbao)&&($thongbao !="")){
                echo $thongbao;
             }
             ?>
             </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "./view/boxright.php";
        ?>
    </div>