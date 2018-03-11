<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php

require('../datastore/Books_ds.php');
require('../datastore/db_conn.php');

  //local Vars

  $db = bookDb_Connect();

  $books = new Books_ds($db);
  $bookArr = $books->select(NULL);

  foreach ($bookArr as $row){
      //var_dump($row);
      foreach($row as $col){
        echo $col.'&nbsp;';
      }
      echo '<br/>NEXT<br/>';
  }



   ?>
</body>
</html>
