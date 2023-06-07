<?php

//create array of greetings then get random values

$greetings   =   ['Hi', 'Howdy' , 'Hello', 'Hola',
                                'Welcome', 'Cio',];

$greeting_key   = array_rand($greetings);
$greeting   =   $greetings [$greeting_key];

//Array of bestsellers, count items, list top items

$bestsellers    =    ['notebook ', ' pencil', ' ink',];
$bestseller_count   = count($bestsellers);
$bestseller_text    = implode(',', $bestsellers);

//Array holding customer details

$customer   =[
    'forename'  =>  'Emmanuel',
    'surname'   =>  'Bollie',
    'email'     =>  'ej@gmail.com',
];

//if you have a customer full name, add it to greeting

if(array_key_exists('forename', $customer)){
    $greeting   =   $customer['forename'];
}

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
       <h1>Best Sellers</h1>
       <p><?= $greeting  ?></p>
        <p><?=  $bestseller_count ?> items today are: <b><?=  $bestseller_text ?></b></p>




</body>
</html>