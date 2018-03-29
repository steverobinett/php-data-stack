<?php
require('../data/books.php');

class Books_ds extends Books{

  var $conn;

  function __construct($conn){

    $this->conn = $conn;

  }

  function select($sel_list){

    if ($sel_list == NULL){
      $sel_list = '*';
    }
    else {
      # expect csv string in arg. explode into arr
    }

    $qry = 'SELECT '. $sel_list.' FROM Books';
    $stmt = $this->conn->prepare($qry);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($this->isbn, $this->author, $this->title, $this->price);

    $returnSet = array();
    while ($stmt->fetch()){
      $row = array();

      array_push($row,$this->isbn);
      array_push($row,$this->author);
      array_push($row,$this->title);
      array_push($row,$this->price);

      array_push($returnSet, $row);


    }

    return $returnSet;
  }

  function insert($values){

    return null;
  }
}



 ?>
