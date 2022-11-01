<?php

require __DIR__ . "/header.php";
require __DIR__ . "/functions.php";
require __DIR__ . "/arrays.php";

?> <h3> <?php echo $chapters[0]["title"], $chapters[0]["story"]; ?> </h3>

<body>
    <main>
        <article class="riddleContainer">
            <div class="riddleTextBox">
                
                <h2> <?= randomizeArray($riddleWords); ?> </h2>

                <form method="post" action="chapterone.php" class="answerForm">
                    <label for="answer">Answer: </label>
                    <input type="text" name="answer" autocomplete="off">
                </form>

                <?php if (isset($_POST["answer"])):

                $riddleAnswerInput = $_POST["answer"];
                $riddleAnswer = implode($riddleWord);
                $_SESSION["answer"] = $riddleAnswer;

                    if ($riddleAnswerInput === $_SESSION["answer"]) {
                        echo "Right answer!";
                    } else
                        echo "Try again!";
                    endif; ?>
            </div>
        </article>
    </main>

<?php require __DIR__ . "/footer.php"; ?>