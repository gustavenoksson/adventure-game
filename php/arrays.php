<?php

declare(strict_types=1);

require_once __DIR__ . "/../index.php";

// Array of playable characters
$characters = [
    ["name" => "Shaun", "item" => "Flashlight"],
    ["name" => "Laura", "item" => "Key"],
    ["name" => "Max", "item" => "Knife"]
];

// Array of words in the riddle
$riddleWords = [
    "Haunted",
    "Spooky",
    "Terror",
    "Knife"
];
// Store word from $randomizeWords from randomizeArray function.
$riddleWord = [];

$chapters = [
    ["title" => "Chapter 1 - The arrival:",
    "story" => "After a long walk trough the woods at night pondered upon a house. It seems rundown and very old. The planks underneath creek as make it to the door. After some inspection noticed that the door does not have a keyhole but instead a puzzle on it. Can find the word to get into the house?"],

    ["title" => "Chapter 2 - The House",
    "story" => ""]
];