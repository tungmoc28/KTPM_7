<?php
require_once("./models/truyvandb.php");
require_once("./models/group.php");
class group_model {

    public function getlist() {
        $sql = 'select * from groups';
        $List = executeResult($sql);
        return $List;
    }

    function insert(Group $group) {
        $sql = "insert into groups(groups) value ('$group->group')";
        $result = execute($sql);
       
        return $result;
    }

    public function getinfo($id) {
        $sql = 'select * from groups where id='.$id;
        $List = executeResult($sql);
        return $List;
    }

    function update($id,$group) {
        $sql = "UPDATE groups set groups = '$group' where id = '$id'";
        $result = execute($sql);
        return $result;
    }

    
    public function delete($id) {
        $sql = 'delete from groups where id = '.$id;
        $result = execute($sql);
        return $result;
    }

    public function permissions($id,$arr_per) {
        $sql = 'delete from phanquyen_group where id_group = '.$id;
        $result = execute($sql);
        foreach($arr_per as $value){
            $sql = "insert into phanquyen_group(id_group,id_chucnang) value ('$id',$value)";
            $result = execute($sql);
        }
        return $result;
    }
    
    public function permissions_now($id){
        $sql = 'select * from phanquyen_group where id_group = '.$id;
        $List = executeResult($sql);
        return $List;
    }

    public function check_quyen($id_group){
        $sql = 'select module from phanquyen_group left join module on id_chucnang = module.id where id_group = '.$id_group;
        $List = executeResult($sql);
        return $List;
    }

}
?>