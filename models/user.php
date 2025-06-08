<?php
class User {
    var $data = array();

    function set($key,$value) {
        $this->$key = $value;
    }
    function get($key){
        return $this->$key;
    }
}
?>