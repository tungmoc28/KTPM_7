<?php
require_once("./models/truyvandb.php");
require_once("./models/hoso.php");
class hoso_model {

    public function getlist() {
        $sql = 'select * from hoso';
        $List = executeResult($sql);
        return $List;
    }

    function insert(HoSo $hoso) {
        $cccd_hash = hash('sha256', $hoso->cccd);
        $sql = "insert into hoso(hovaten,gioitinh,cccd,ngaycap,diachi,cccd_hash) value ('$hoso->hovaten','$hoso->gioitinh','$hoso->cccd','$hoso->ngaycap','$hoso->diachi','$cccd_hash')";
        $result = execute($sql);       
        return $result;
    }

    public function getinfo($id) {
        $sql = 'select * from hoso where id='.$id;
        $List = executeResult($sql);
        return $List;
    }

    function update($id,HoSo $hoso) {
        $cccd_hash = hash('sha256', $hoso->cccd);
        $sql = "UPDATE hoso set hovaten = '$hoso->hovaten',gioitinh = '$hoso->gioitinh',cccd = '$hoso->cccd',ngaycap = '$hoso->ngaycap',diachi = '$hoso->diachi',cccd_hash = '$cccd_hash' where id = '$id'";
        $result = execute($sql);
        return $result;
    }


    public function delete($id) {
        $sql = 'delete from hoso where id = '.$id;
        $result = execute($sql);
        return $result;
    }

    public function getThongtinhoso($id,$giayto){
        $sql = "select image,hoso_giayto.id as id from hoso_giayto left join hoso on hoso.id = id_hoso left join giayto on giayto.id = id_giayto where id_hoso = '$id' and id_giayto = '$giayto'";
       
        $List = executeResult($sql);
        return $List;
    }

    public function insert_hoso_giayto($id,$image,$giayto){
        $sql = "insert into hoso_giayto(id_hoso,id_giayto,image) value ('$id','$giayto','$image')";
        $result = execute($sql);       
        return $result;
    }

    public function getinfo_image($id) {
        $sql = 'select * from hoso_giayto where id='.$id;
        $List = executeResult($sql);
        return $List;
    }
    public function delete_anh($id) {
        $sql = 'delete from hoso_giayto where id = '.$id;
        $result = execute($sql);
        return $result;
    }
}
?>