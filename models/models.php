<?php
class Blog {
  public function __construct(PDO $db) {
    $sql =
    "
    CREATE TABLE IF NOT EXISTS blog (
    id INT PRIMARY KEY AUTO_INCREMENT,
    post TEXT NOT NULL,
    time TIMESTAMP NOT NULL
    )ENGINE = MyISAM
    ";

    $conn = $db->prepare($sql);
    $conn->execute();
  }
}

class Users {
  public function __construct(PDO $db) {
    $sql =
    "
    CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password TEXT NOT NULL
    )ENGINE = MyISAM
    ";

    $conn = $db->prepare($sql);
    $conn->execute();
  }
}

class Comments {
  public function __costruct(PDO $db) {
    $sql =
    "
    CREATE TABLE IF NOT EXISTS comments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    by_who VARCHAR(100) NOT NULL,
    comment TEXT NOT NULL,
    time TIMESTAMP NOT NULL
    )ENGINE = MyISAM
    ";
    $conn = $db->prepare($sql);
    $conn->execute();
  }
}


function init() {
  require_once('../config.php');
  new Blog($db);
  new Users($db);
  new Comments($b);
}

init();
?>
