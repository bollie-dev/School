<?php

$logged_in  = true;

if($logged_in   == false){
    header('location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redirect</title>
</head>
<body>
     <h1>Members area</h1>
    <p>Welcome to the members area</p>

</body>
</html>