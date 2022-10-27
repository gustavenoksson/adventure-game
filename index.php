<?php
require __DIR__ . "/php/header.php";
require __DIR__ . "/php/arrays.php";
require __DIR__ . "/php/functions.php";
?>

<body>

    <header>
        <h1>Horror House</h1>
    </header>

    <main>
        <!-- Loop trough all playable characters and their items. For each character it also creates new div and h2 elements -->
        <section class="charactersSection">

            <?php foreach($characters as $character): ?>
            <div class="characterContainer">

                <h2><?php echo "Name: " . $character["name"] . " " . "Item: " . $character["item"]; ?></h2>

                <form method="post" action="index.php">
                    <input type="submit" name="charBtn" value="Select Character">
                </form>

            </div>
            <?php endforeach; ?>

            <?php

                if ($_POST["charBtn"]) {
                    echo $character["name"];
                } else {
                    echo "Please select a character";
                }
            ?>

        </section>

        <article class="riddleContainer">
            <div class="riddleTextBox">

                <h3>Chapter 1: The arrival</h3>
                <p>After a long walk trough the woods at night you ponder upon a house. It seems rundown and very old. The planks underneath you creek as you make it to the door. After some inspection you notice that the door does not have a keyhole but instead a puzzle on it. Can you find the word to get into the house?</p>

                <h2> <?= randomizeArray($riddleWords); ?> </h2>

                <form action="index.php" method="post" class="answerForm">
                    <label for="answer">Answer: </label>
                    <input type="text" name="answer" autocomplete="off">
                </form>

            </div>
        </article>

    </main>
</body>

</html>