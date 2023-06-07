<?php

//Sorting arrays (changing orders)



/*
# Sort by value and change keys
-sort($array)  // ascending according to value
-rsort($array) // descending according to value
# Sort by value and maintain keys
-asort($array) // ascending according to value
-arsort($array) descending according to value
# Sort by key and maintain values
-ksort($array) // ascending according to key
-krsort($array) // descending acccording to key

*/

// Array holding order

$order  =   ['notebook', 'pencil', 'scissors', 'eraser', 'ink', 'wash tape',];

sort($order);   //sort ascending
$items  = implode(', ', $order); //convert to text

// Create array holding classes

$classes    =   [
    'Patchwork' =>  'April 12th',
    'Knitting'  =>  'May 4th',
    'Origami'   =>  'June 8th',
];
ksort($classes);

?>

                   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <h1>Order</h1>
    <?= $items ?><br>
    <?php
    foreach($classes as $description    => $date){ ?>
        <b> <?= $description?></b> <?= $date ?><br>
   <?php } ?>





</body>
</html>