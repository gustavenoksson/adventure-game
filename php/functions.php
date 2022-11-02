<?php

declare(strict_types=1);

session_start();

require __DIR__ . "/arrays.php";

// Function to randomize a word from the $riddleWords array by randomizing the index number of the array
function randomizeArray(array $array){

    shuffle($array);
    $randomWord = $array[0];

    $shuffleString = str_shuffle($randomWord);

    return $shuffleString;
};

function addNumber(int $numOne, int $numTwo, int $numThree){
    $result = $numOne + $numTwo + $numThree;
    
if (isset($_POST["answerRiddleTwo"])) {
    if ($_POST["answerRiddleTwo"] == $result){
        return "Right Answer!";
    } else return "Wrong answer!";
}
}  