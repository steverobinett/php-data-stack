<?php
require('../data/books.php');

class Books_ds extends Books{

  var $conn;

  function __construct($conn){

    $this->conn = $conn;

  }

  function select($sel_list){
    return null;
  }

  function insert($values){

    return null;
  }
}



 ?>
