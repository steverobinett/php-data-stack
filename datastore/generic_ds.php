<?php
require('../data/books.php');

class Generic_ds extends Books
{
  private $conn;
  private $col_names;

  function __construct($c, $base_class_name){
    $this->conn = $conn;
    $this->$col_names = array();

    $this->col_names = get_class_vars($this->class_name);

    var_dump($this->col_names);
  }
}

?>
