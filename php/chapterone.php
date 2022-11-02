<?php

require __DIR__ . "/header.php";
require __DIR__ . "/functions.php";
require __DIR__ . "/arrays.php";

?>

<body>
    <main>
        <article class="riddleContainer">
            <div class="riddleTextBox">

                <h1 class="chapter"> <?= $chapters[0]["title"] ?> </h1> <h2 class="chapter"> <?=  $chapters[0]["story"]; ?> </h2>

                <h2 class="riddleWord"> <?= randomizeArray($riddleWords); ?> </h2>

                <form method="post" action="chapterone.php" class="answerForm">
                    <label for="answer">Answer:</label>
                    <input type="text" name="answerRiddleOne" autocomplete="off">
                    <button type="submit">Try answer</button>
                </form>

                <?php if (isset($_POST["answerRiddleOne"])):

                $riddleAnswerInput = $_POST["answerRiddleOne"];

                    if (in_array($riddleAnswerInput, $riddleWords)){
                        ?> <h3><a href="/php/chaptertwo.php">The door opens, click here to step inside</a></h3> <?php
                    } else {
                        ?> <h3>Wrong answer, looks like the letters on the door moved!</h3> <?php
                    }

                    endif; ?>

            </div>
        </article>
    </main>

<?php require __DIR__ . "/footer.php"; ?>