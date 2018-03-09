<?php
require('../data/books.php');

class Books_ds extends Books{

  var $conn;

  function __construct($conn){

    $this->conn = $conn;

  }

  function select($sel_list){

    if ($sel_list == null){
      $sel_list = '*';
    }

    $qry = 'SELECT '. $sel_list.' FROM Books';
    $stmt = $this->conn->prepare($qry);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($isbn, $author, $title, $price);

    $rows = array();
    while ($stmt->fetch()){

      array_push($rows,$isbn);


    }
    return $rows;
  }

  function insert($values){

    return null;
  }
}



 ?>
