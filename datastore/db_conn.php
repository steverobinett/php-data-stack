
<?php
//ToDo move this into a its own file

function bookDb_Connect()
{
    $db = new mysqli();
    $status = mysqli_connect_errno();

    if ($status) {
        echo '<p>Error: Could not connect to database.<br/>
              Please try again later.</p>';
        echo 'Status is '.mysqli_connect_errno().'<br/>';
        $db = null;
        //exit;
    }

    return $db;
}


 ?>
