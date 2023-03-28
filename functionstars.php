<?php

function stars($in_num)
{
    for ($i=1; $i <= $in_num; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "\n";
    }
}

// stars(5);

function stars2($in_num)
{
    for ($i = 1; $i <= $in_num; $i++) {
            echo "*";
    }
}

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


function printStars($rows)
{
    for ($i = 0; $i <= $rows; $i++) {
        echo '*';
    }
    echo "\n";
}

$rows = 5;

for ($k=0; $k < $rows; $k++) {
    printStars($k);
}

function printStars2($rows)
{
    echo str_repeat('*', $rows) . "\n";
}

$rows = 5;

for ($k = 1; $k <= $rows; $k++) {
    printStars2($k);
}


?>