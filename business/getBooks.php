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

  //local Vars

  //ToDo move this into a its own file
  $db = new mysqli( 'db715378838.db.1and1.com', 'dbo715378838', 'Linux2018', 'db715378838');

  if (mysqli_connect_errno()) {
         echo '<p>Error: Could not connect to database.<br/>

         Please try again later.</p>';
         echo 'Status is '.mysqli_connect_errno().'<br/>';
         exit;
  }
      else{
        echo 'DB Connect OK. Status is '.mysqli_connect_errno().'<br/>';
  }

  $books = new Books_ds($db);
  $bookArr = $books->select(NULL);
  var_dump($bookArr);


   ?>
</body>
</html>
