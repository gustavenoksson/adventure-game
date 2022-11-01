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

        <form method="post" action="index.php" class="playerForm">
            <label for="playerName">Please type in your name: </label>
            <input type="text" name="playerName"> 
        </form>

        <?php if(isset($_POST["playerName"])):

        $player = $_POST["playerName"];

        $_SESSION["chapterOneTitle"] = $chapters[0]["title"];
        $_SESSION["chapterOneStory"] = $chapters[0]["story"];
        

        ?> <h3> <?php echo $_SESSION["chapterOneTitle"], $_SESSION["chapterOneStory"] ?> </h3> <?php
        endif; ?>
    
        </section>

        <article class="riddleContainer">
            <div class="riddleTextBox">
                
                <h2> <?= randomizeArray($riddleWords); ?> </h2>

                <form method="post" action="index.php" class="answerForm">
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
    
    <?php
    require __DIR__ . "/php/footer.php";
    ?>