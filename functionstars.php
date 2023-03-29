<?php

// function stars($in_num)
// {
//     for ($i=1; $i <= $in_num; $i++) { 
//         for ($j=0; $j < $i; $j++) { 
//             echo "*";
//         }
//         echo "\n";
//     }
// }

// stars(5);

// function stars2($in_num)
// {
//     for ($i = 1; $i <= $in_num; $i++) {
//             echo "*";
//     }
// }

// stars2(4);

// function stars3(...$rows)
// {
//     foreach ($rows as $rows) {
//         for ($i = 1; $i <= $rows; $i++) {
//             echo "*";
//         }
//         echo "\n";
//     }
// }

// stars3(1,2,3,4,5);

//1


function printStars($rows)
{
    for ($i = 0; $i <= $rows; $i++) {
        echo '*';
    }
    echo "\n";
}

$rows = 5;


for ($i=0; $i < $rows; $i++) {
    printStars($i);
}

//2

function printStars2($rows)
{
    echo str_repeat('*', $rows) . "\n";
}

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    printStars2($i);
}

//3

function printStars3($rows)
{
    $stars = '';

    foreach (range(1, $rows) as $i) {
        $stars .= '*';
        echo $stars . "\n";
    }
}

$rows = 5;
printStars3($rows);

//4

function printStars4($rows)
{
    $i = 1;
    $stars = '';

    while ($i <= $rows) {
        $stars .= '*';
        echo $stars . "\n";
        $i++;
    }
}

$rows = 5;
printStars4($rows);

?>
