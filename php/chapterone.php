<?php

require "header.php";
require "functions.php";
require "arrays.php";

?>

<body>
    <header>
    </header>
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

                <!-- If statement that returns true if the word the use types in the form is a string from riddleWords array -->
                <?php if (isset($_POST["answerRiddleOne"])){

                $riddleAnswerInput = $_POST["answerRiddleOne"];

                    if (isStringInArray($riddleWords, $riddleAnswerInput)){
                        ?> <h3><a href="chaptertwo.php">The door opens, click here to step inside</a></h3> <?php
                    } else {
                        ?> <h3>Wrong answer, looks like the letters on the door moved!</h3> <?php
                    }
                } ?>

                <p class="skipChapter"><a href="chaptertwo.php">Skip to chapter 2</a></p>

            </div>
        </article>
    </main>

<?php require "footer.php"; ?>