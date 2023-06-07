<?php
//Array of items being ordered

$order  =   ['notebook' , 'pencil' , 'eraser', ];
array_unshift($order, 'scissors'); // Add to start
array_pop($order);  // remove last
$items  = implode(', ', $order);    //converting to string

$classes    =   [
    'Patchwork'     =>  'April 12th',
    'Knitting'          =>  'May 4th',
    'Lettering'       =>    'May 18th',
];

array_shift($classes);  //remove 1st
$new    =   [
    'Origami'       =>  'June 5th',
    'Quilting'      =>  'June 23rd',
];                                                      // new items

$classes    = array_merge($classes, $new);      // add to end

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Update</title>
</head>
<body>
<h1>Order</h1>
<?=  $items ?>
<h1>Classes</h1>
<?php
    foreach ($classes as $description   => $date) { ?>
        <b><?=  $description  ?></b> <?= $date  ?>
    <?php } ?>
?>





</body>
</html>
