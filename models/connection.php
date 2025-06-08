<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","baitaplon");
class DB {
    var $conn;
    function __construct() {
        $this->conn = mysqli_connect(HOST,USER,PASS,DB) or DIE("FAILED");

    }
    function db_query($SQL) {
        $rs = mysqli_query($this->conn,$SQL);
        return $rs;
    }
    function db_fetch_array($rs) {
        if ($rs)
            return mysqli_fetch_array($rs);
            else
                return false;
    }
}
?>