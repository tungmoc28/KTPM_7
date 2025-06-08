<?php
require_once("./models/truyvandb.php");
require_once("./models/module.php");
class module_model {

    public function getlist() {
        $sql = 'select * from module';
        $List = executeResult($sql);
        return $List;
    }

    function insert(module $module) {
        $sql = "insert into module(module,chucnang) value ('$module->module','$module->chucnang')";
        $result = execute($sql);
       
        return $result;
    }

    public function getinfo($id) {
        $sql = 'select * from module where id='.$id;
        $List = executeResult($sql);
        return $List;
    }

    function update($id,$module,$chucnang) {
        $sql = "UPDATE module set module = '$module',chucnang = '$chucnang' where id = '$id'";
        $result = execute($sql);
        return $result;
    }

    
    public function delete($id) {
        $sql = 'delete from module where id = '.$id;
        $result = execute($sql);
        return $result;
    }

}
?>