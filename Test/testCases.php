<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
  require("../datastore/db_conn.php");
  require("../datastore/Books_ds.php");

  echo '<p> Test Case for single select</p>';
  $conn = bookDb_Connect();
  $books = new Books_ds($conn);

  $key ="0-672-31697-8";

  $bookRow = $books->selectSingle($key);
  var_dump($bookRow);





   ?>

</body>
</html>
