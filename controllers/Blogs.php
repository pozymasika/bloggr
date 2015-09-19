<?php
/**
*
*
*/
class Blogs {
  private $db;
  public function __construct (PDO $db) {
    $this->db = $db;
  }
  public function create($post,$username) {
    try {
      $sql = "INSERT INTO blog(post,by_who,time) VALUES(:post, :username, NOW())";
      $conn = $this->db -> prepare($sql);
      $conn->execute(array(
        ':post' => $post,
        ':username' => $username
      ));
    } catch(PDOException $e) {
      return false;
    }
    return true;
  }

  public function read($id) {
    try {
      $sql = "SELECT post,time FROM blog WHERE id=:id LIMIT 1";
      $conn = $this->db -> prepare($sql);
      $conn->execute(array(
        ':id' => $id
      ));
      $results = $conn->fetchAll();
    } catch(PDOException $e) {
      return $e->getMessage();
    }
    return $results;
  }

  public function all($username) {
    try {
      $sql = "SELECT post,time FROM blog WHERE by_who=:username";
      $conn = $this->db->prepare($sql);
      $conn->execute(array(':username' => $username));
      $results = $conn->fetchAll();
      if($results) {
        return $results;
      }
    } catch(PDOException $e) {
      return $e->getMessage();
    }
  }

  public function update($id,$post) {
    try {
      $sql = "UPDATE blog SET post=:post WHERE id=:id";
      $conn = $this->db->prepare($sql);
      $conn->execute(array(':post' => $post,':id' => $id));

    } catch(PDOException $e) {
      return $e->getMessage();
    }

    return true;
  }

}
//include_once('../config.php');
//$blog = new Blogs($db);
//print_r($blog->create('This is a new post','pozy'));
//print_r($blog->read(1));
//print_r($blog->all('pozy'));
//print_r($blog->update(1,'This post has changed.'));
?>
