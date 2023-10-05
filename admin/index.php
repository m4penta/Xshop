<?php
//đây là trang layout để quản lí các trang con

 include "header.php";
 //routing -- đây là đoạn code tạo đường dẫn thư mục dựa theo thẻ url, có thể kiểm tra thẻ <ul> theo đường dẫn admin/header.php
 if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addm':
            include"./danhmuc/add.php";
            break;
            
        case 'addsp':
            include"./sanpham/add.php";
            break;
        
            
        default:
        include"home.php";
        break;
    }
 }else{
    include "home.php";
 }
 
 
 include "footer.php";