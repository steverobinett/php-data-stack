<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../application/css/books.css">
  <title>Book Listing</title>
</head>
<body>

  <h2>Book Listing</h2>
  <?php

require('../datastore/Books_ds.php');
require('../datastore/db_conn.php');
require('../application/util/formattingUtils.php');

  //local Vars

  $db = bookDb_Connect();

  $books = new Books_ds($db);
  $bookArr = $books->selectAll(null); // NULL = 'get all cols'


  echo buildHTMLTable($bookArr);

   ?>
<!-- ########################################## -->


</body>
</html>
