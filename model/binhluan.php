<?php 
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan,$hoten){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan,ho_ten) values('$noidung','$iduser','$idpro','$ngaybinhluan','$hoten')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql= "select * from binhluan where idpro='".$idpro."' order by id desc ";
    $listbl= pdo_query($sql);
    return $listbl;
}
?>