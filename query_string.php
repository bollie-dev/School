<?php

$cities =   [
    'London'    =>   '48 Store Street, WCIE 7BS',
    'Sydney'    =>   '151 Oxford Street, 2021',
    'NYC'       =>   '1242 7th Street, 10492',
];

$city   =   $_GET['city'];
$address    =   $cities[$city];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query string</title>
</head>
<body>
    <?php foreach($cities as $key   =>  $value){ ?>
            <a href="get-1.php?city"<?= $key  ?><?= $key  ?></a>

    <?php } ?>

    <h1><?= $city  ?></h1>
    <p><?= $address  ?></p>

</body>
</html>