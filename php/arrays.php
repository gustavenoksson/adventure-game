<?php

declare(strict_types=1);

// Store players name from "playerName" input

// Array of words in the riddle
$riddleWords = [
    "Haunted",
    "Spooky",
    "Terror",
    "Knife",
    "Horror"
];

// Array of the story with chapter titles
$chapters = [
    ["title" => "Chapter 1 - The arrival:",
    "story" => " After a long walk trough the woods at night pondered upon a house. It seems rundown and very old. The planks underneath creek as make it to the door. After some inspection noticed that the door does not have a keyhole but instead a puzzle on it. Can find the word to get into the house?"],

    ["title" => "Chapter 2 - The House",
    "story" => "As you make it into the house you are treated with a horrible smell and cobwebs that get into your face. After some exploring you notice 3 old dusty pictures lying on the floor. Infront of the cards is a note saying 'to escape trough the door, add all the cards on the floor'. Can you figure out how to open the door?"]
];

$images = ["/images/circle-meeting.png" => 8,
"/images/skeleton-picture.jpeg" => 10,
"/images/floating-instrument.png" => 2];