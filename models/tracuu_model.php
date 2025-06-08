<?php
require_once("./models/truyvandb.php");
require_once("./models/tracuu.php");
class tracuu_model {
    public function getinfo($param) {
        $sql = "select * from hoso where cccd_hash ='$param'";
        $List = executeResult($sql);
        return $List;
    }

    public function getgiayto() {
        $sql = "select * from giayto order by id asc";
        $List = executeResult($sql);
        return $List;
    }

     public function getanh($id) {
        $sql = "select * from hoso_giayto where id_hoso = '$id' order by id_giayto asc";
        $List = executeResult($sql);
        return $List;
    }
}
?>