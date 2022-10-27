<?php

declare(strict_types=1);

require __DIR__ . "/arrays.php";

// Function to randomize a word from the $riddleWords array by randomizing the index number of the array.
function randomizeArray($array){

    $randomizeWords = $array[shuffle($array)];

    $shuffleLetters = str_shuffle($randomizeWords);
    return $shuffleLetters;
};