<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'database');
class DB_con {
    function __construct() {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbh = $con;
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    //Data Insertion Function
    public function insert($name, $email, $mobile) {
        $ret = mysqli_query($this->dbh, "insert into user(name,email,mobile) values('$name','$email','$mobile')");
        return $ret;
    }
    //Data read Function
    public function fetchdata() {
        $result = mysqli_query($this->dbh, "select * from user");
        return $result;
    }
    //Data one record read Function
    public function fetchonerecord($userid) {
        $oneresult = mysqli_query($this->dbh, "select * from user where id=$userid");
        return $oneresult;
    }
    //Data updation Function
    public function update($name, $email, $mobile, $userid) {
        $updaterecord = mysqli_query($this->dbh, "update  user set name='$name',email='$email',mobile='$mobile' where id='$userid'");
        return $updaterecord;
    }
    //Data Deletion function Function
    public function delete($userid) {
        $deleterecord = mysqli_query($this->dbh, "delete from user where id=$userid");
        return $deleterecord;
    }
}
?>