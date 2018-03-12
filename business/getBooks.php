<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h2>Book Listing</h2>
  <?php

require('../datastore/Books_ds.php');
require('../datastore/db_conn.php');

  //local Vars

  $db = bookDb_Connect();

  $books = new Books_ds($db);
  $bookArr = $books->select(NULL); // NULL = 'get all cols'


  $x= buildHTMLTable($bookArr);
  //echo 'func returns'.$x;
//replace with call to buildHTMLTable()
  // foreach ($bookArr as $row){
  //     //var_dump($row);
  //     foreach($row as $col){
  //       echo $col.'&nbsp;';
  //     }
  //     echo '<br/>NEXT<br/>';
  // }
  // end replace
   ?>

   <?php
  function buildHTMLTable($dataSet){
    //var_dump($dataSet);
    $tblHTML = "<table>";
    echo "Hello";
    foreach ($dataset as $row) {
        echo $col.'tbl is '.$tblHTML;
      $tblHTML = $tblHTML.'<tr>';
      foreach($row as $col){
        $tblHTML = $tblHTML."<td>$col</td>";

      }
      $tblHTML = $tblHTML."</tr>";
      # code...
    }
    $tblHTML = $tblHTML."</table>";
    echo 'Var dump is';

      return $tblHTML;
  }


    ?>
</body>
</html>
