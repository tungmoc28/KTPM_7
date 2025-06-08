<?php
require_once("./models/truyvandb.php");
require_once("./models/giayto.php");
class giayto_model {

    public function getlist() {
        $sql = 'select * from giayto';
        $List = executeResult($sql);
        return $List;
    }

    function insert(GiayTo $giayto) {
        $sql = "insert into giayto(tengiayto) value ('$giayto->tengiayto')";
        $result = execute($sql);
       
        return $result;
    }

    public function getinfo($id) {
        $sql = 'select * from giayto where id='.$id;
        $List = executeResult($sql);
        return $List;
    }

    function update($id,$giayto) {
        $sql = "UPDATE giayto set tengiayto = '$giayto' where id = '$id'";
        $result = execute($sql);
        return $result;
    }

    
    public function delete($id) {
        $sql = 'delete from giayto where id = '.$id;
        $result = execute($sql);
        return $result;
    }

}
?>