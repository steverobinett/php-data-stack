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

    $qry = 'SELECT '. $sel_list.' FROM Books';
    $stmt = $this->conn->prepare($qry);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($isbn, $author, $title, $price);

    $returnSet = array();
    while ($stmt->fetch()){
      $row = array();

      array_push($row,$isbn);
      array_push($row,$author);
      array_push($row,$title);
      array_push($row,$price);

      array_push($returnSet, $row);


    }

    return $returnSet;
  }

  function insert($values){

    return null;
  }
}



 ?>
