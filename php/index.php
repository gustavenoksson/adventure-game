<?php

require "header.php";
require "functions.php";
require "arrays.php";

?>

<body>
    <header>
        <h1>Horror House</h1>
    </header>

    <main>
        <section class="playerInputSection">

        <form method="post" action="chapterone.php" class="playerForm">
            <label for="playerName">Please type in your name: </label>
            <input type="text" name="playerName">
            <button type="submit">Select Name</button>
        </form>
        
        </section>
    </main>

    <?php require "footer.php"; ?>