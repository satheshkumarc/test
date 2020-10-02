<?php

class db {
  public function __construct()
  {
    $sql = "CREATE DATABASE IF NOT EXISTS test";

    $this->conn = new mysqli('localhost', 'root', '', 'test');

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }



    $sql_table = "CREATE TABLE IF NOT EXISTS sample (
        id    INT UNSIGNED  NOT NULL AUTO_INCREMENT,
        firstname         VARCHAR(30)   NOT NULL DEFAULT '',
        lastname         VARCHAR(30)   NOT NULL DEFAULT '',
        dob         VARCHAR(30)   NOT NULL DEFAULT '',
        address1         LONGTEXT    NOT NULL DEFAULT '',
        address2         LONGTEXT   NOT NULL DEFAULT '',
        country         VARCHAR(30)   NOT NULL DEFAULT '',
        state         VARCHAR(30)   NOT NULL DEFAULT '',
        city         VARCHAR(30)   NOT NULL DEFAULT '',
        pincode         VARCHAR(30)   NOT NULL DEFAULT '',
        comments         LONGTEXT   NOT NULL DEFAULT '',
        PRIMARY KEY  (id)
      )";
    if ($this->conn->query($sql_table) === TRUE) {
      // echo "Database created successfully";
    } else {
      // echo "Try Later";;
    }
  }
}
$data_base = new db();
?>