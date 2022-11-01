<?php

declare(strict_types=1);

require __DIR__ . "/arrays.php";

// Function to randomize a word from the $riddleWords array by randomizing the index number of the array
function randomizeArray(array $array){

    shuffle($array);
    $randomizeWords = $array[0];

    $shuffleString = str_shuffle($randomizeWords);
    $_SESSION["riddleWord"] = $shuffleString;

    global $riddleWord;
    array_push($riddleWord, $randomizeWords);
    

    if(isset($_SESSION["riddleWord"])){
        return $_SESSION["riddleWord"];
    }
};