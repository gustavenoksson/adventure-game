<?php

session_start();

require __DIR__ . "/php/header.php";
require __DIR__ . "/php/functions.php";
require __DIR__ . "/php/arrays.php";

?>

<body>
    <header>
        <h1>Horror House</h1>
    </header>

    <main>
        <section class="playerInputSection">

        <form method="post" action="/php/chapterone.php" class="playerForm">
            <label for="playerName">Please type in your name: </label>
            <input type="text" name="playerName"> 
        </form>

        <?php if(isset($_POST["playerName"])):

        $playerName = $_POST["playerName"];

        endif;
        ?>
        
        </section>
    </main>

    <?php require __DIR__ . "/php/footer.php"; ?>