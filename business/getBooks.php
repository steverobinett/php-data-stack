<?php

//local Vars

//ToDo move this into a it's file
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


 ?>
