<?php
require('../data/books.php');

class Books_ds extends Books
{
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function selectSingle($key)
    {
        $row = null;

        $qry = 'SELECT '. $sel_list.' FROM Books WHERE Books.isbn = ?';
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("s", $key);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($this->isbn, $this->author, $this->title, $this->price);

        $row = array();
        while ($stmt->fetch()) {
            array_push($row, $this->isbn);
            array_push($row, $this->author);
            array_push($row, $this->title);
            array_push($row, $this->price);
        }
        return $row;
    }

    public function select($sel_list)
    {
        if ($sel_list == null) {
            $sel_list = '*';
        } else {
            # expect csv string in arg. explode into arr
        }

        $qry = 'SELECT '. $sel_list.' FROM Books';
        $stmt = $this->conn->prepare($qry);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($this->isbn, $this->author, $this->title, $this->price);

        $returnSet = array();
        while ($stmt->fetch()) {
            $row = array();

            array_push($row, $this->isbn);
            array_push($row, $this->author);
            array_push($row, $this->title);
            array_push($row, $this->price);

            array_push($returnSet, $row);
        }

        return $returnSet;
    }

    public function insert($values)
    {
        return null;
    }
}
