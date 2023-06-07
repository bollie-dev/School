<?php

$path   =   'img/logo.jpg';


?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files and Deleting files</title>
</head>
<body>
    <?php if(file_exists($path)){  ?>

    <b>Name:</b>        <?= pathinfo($path, PATHINFO_BASENAME)?><br>
    <b>Size:</b>        <?= filesize($path) ?><br>
    <b>Mime type:</b>   <?= mime_content_type($path)?><br>
    <b>Folder:</b>      <?= pathinfo($path, PATHINFO_DIRNAME) ?>

   <?php } else { ?>
   <p>There is no such file</p>

   <?php } ?>
</body>
</html>



