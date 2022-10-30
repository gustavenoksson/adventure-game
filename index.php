<?php
require __DIR__ . "/php/header.php";
require __DIR__ . "/php/arrays.php";
require __DIR__ . "/php/functions.php";

if (isset($_POST["answer"]) === implode($riddleWord)) {
    echo "Your are right!";
} else {
    echo "Try again!";
}

?>

<body>

    <header>
        <h1>Horror House</h1>
    </header>

    <main>

        <section class="charactersSection">

        <form method="post" action="index.php" class="playerForm">
            <label for="playerName">Please type in your name: </label>
            <input type="text" name="playerName">
        </form>

        </section>

        <article class="riddleContainer">
            <div class="riddleTextBox">

                <h3 class="startGame"> <?= startGame($chapters) ?> </h3>
                
                <h2> <?= randomizeArray($riddleWords); ?> </h2>

                <form action="index.php" method="post" class="answerForm">
                    <label for="answer">Answer: </label>
                    <input type="text" name="answer" autocomplete="off">
                </form>

                <p> <?php print_r($riddleWord); ?> </p>

            </div>
        </article>

    </main>
</body>

</html>