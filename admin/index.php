<?php
//đây là trang layout để quản lí các trang con
include "../model/pdo.php";
 include "header.php";
 //routing -- đây là đoạn code tạo đường dẫn thư mục dựa theo thẻ url, có thể kiểm tra thẻ <ul> theo đường dẫn admin/header.php
 if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addm':
            //kiểm tra người dùng có click vào nút add không 
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){ 
                $tenloai=$_POST['tenloai'];
                $sql="insert into danhmuc(name) values('$tenloai')";
                pdo_execute($sql);
                $thongbao="Thêm thành công";
            }
            include"./danhmuc/add.php";
            break;
            
        case 'lisdm':
            $sql= "select * from danhmuc order by id desc ";
            $listdanhmuc= pdo_query($sql);
            include"./danhmuc/list.php";
            break;
        case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                     $sql="delete from danhmuc where id=".$_GET['id']; 
                     pdo_execute($sql);
                }
                $sql= "select * from danhmuc order by id desc ";
                $listdanhmuc= pdo_query($sql);  
                include "./danhmuc/list.php"; 
                break;
            
        default:
            include"home.php";
            break;
    }
 }else{
    include "home.php";
 }
 
 
 include "footer.php";

 ?>