<?php
require_once("./models/truyvandb.php");
require_once("./models/user.php");
class user_model {

    public function getlist() {
        $sql = 'select * from user';
        $List = executeResult($sql);
        return $List;
    }

    function insert(user $user) {
        $mk_hash = hash('sha256', $user->matkhau);
        $sql = "insert into user(taikhoan,matkhau,id_group,matkhau_hash) value ('$user->taikhoan','$user->matkhau','$user->id_group','$mk_hash')";
        $result = execute($sql);
        return $result;
    }

    public function getinfo($id) {
        $sql = 'select * from user where id='.$id;
        $List = executeResult($sql);
        return $List;
    }

    function update($id,$user) {
        $mk_hash = hash('sha256', $user->matkhau);
        $sql = "UPDATE user set taikhoan = '$user->taikhoan',matkhau = '$user->matkhau',id_group='$user->id_group',matkhau_hash = '$mk_hash' where id = '$id'";
        $result = execute($sql);
        return $result;
    }

    
    public function delete($id) {
        $sql = 'delete from user where id = '.$id;
        $result = execute($sql);
        return $result;
    }

    public function dangnhap($taikhoan,$matkhau){
        $mk_hash = hash('sha256', $matkhau);
        $sql = "select * from user where taikhoan='$taikhoan'and matkhau_hash = '$mk_hash'";
        $List = executeResult($sql);
        return $List;
    }

}
?>