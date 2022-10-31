<?php

require __DIR__ . "/php/functions.php";
require __DIR__ . "/php/header.php";
require __DIR__ . "/php/arrays.php";

if (isset($_POST["playerName"])) {

    $player = $_POST["playerName"];

    echo $chapters [0]["title"];
    };

if (isset($_POST["answer"])) {

    $riddleAnswerInput = $_POST["answer"];
    $riddleAnswer = implode($riddleWord);

    if ($riddleAnswerInput === $riddleAnswer) {
        echo "Right answer!";
    } else
        echo "Try again!";
    };



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
                
                <h2> <?= randomizeArray($riddleWords); ?> </h2>

                <form method="post" class="answerForm">
                    <label for="answer">Answer: </label>
                    <input type="text" name="answer" autocomplete="off">
                </form>
            </div>
        </article>
    </main>
</body>

</html>