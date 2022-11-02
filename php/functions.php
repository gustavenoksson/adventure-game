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

// Function that accepts integers as arguments and adds them togheter. Prints "Right Answer!" if user guesses the right number of the added arguments
function addNumbers(int $numOne, int $numTwo, int $numThree){
    $result = $numOne + $numTwo + $numThree;
    
    if (isset($_POST["answerRiddleTwo"])) {
        if ($_POST["answerRiddleTwo"] == $result){
            return header('Location: chapterthree.php');
        } else return "Wrong answer!";
    }
}

// Returns the name of the player
function congratulatePlayer() {

    if(isset($_POST["playerName"])) {
        $playerName = $_POST["playerName"];
        echo $playerName;
    }
}