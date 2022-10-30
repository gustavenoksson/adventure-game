<?php

declare(strict_types=1);

require __DIR__ . "/arrays.php";

// Function to randomize a word from the $riddleWords array by randomizing the index number of the array.
function randomizeArray($array){

    shuffle($array);
    $randomizeWords = $array[0];

    $shuffleLetters = str_shuffle($randomizeWords);

    global $riddleWord;
    array_push($riddleWord, $randomizeWords);

    return $shuffleLetters;
};

function startGame($story){
    if (isset($_POST["player"])) {
        $player = $_POST["player"];

    return $story[0];
    }
};