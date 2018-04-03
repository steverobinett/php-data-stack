<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../application/css/books.css">
  <title>Document</title>
</head>
<body>

  <?php

testBook_ds();

  function testBook_ds()
  {
      require("../datastore/db_conn.php");
      require("../datastore/Books_ds.php");
      require("../application/util/formattingUtils.php");

      $conn = bookDb_Connect();
      $books = new Books_ds($conn);

      $key ="0-672-31697-8";


      $bookRow = null;
      $bookRow = $books->selectSingle($key);
      if ($bookRow != null) {
          echo '<p style="color:green">Test passed: Single Select</p>';
          echo '<br/>'.implode(' ', $bookRow);
      } else {
          echo '<p style="color:red">Test FAILED: Single Select</p>';
      }

      $recSet = null;
      $recSet = $books->selectAll(null);
      if (isset($recSet)) {
          echo '<p style="color:green">Test passed: Select All</p>';
          echo '<br/>'.implode(' ', $bookRow);
      } else {
          echo '<p style="color:red">Test FAILED: Select All</p>';
      }

      echo buildHTMLTable($recSet);
  }




   ?>

</body>
</html>
