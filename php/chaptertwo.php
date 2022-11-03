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
                
            <h1 class="chapter"> <?= $chapters[1]["title"] ?> </h1> <h2 class="chapter"> <?= $chapters[1]["story"]; ?> </h2>

                <!-- Echo function addNumber to, linked to form below -->
                <h2> <?=  addNumbers(8, 10, 2); ?> </h2>

                <form method="post" action="chaptertwo.php" class="answerForm">
                    <label for="answerRiddleTwo">Answer:</label>
                    <input type="text" name="answerRiddleTwo" autocomplete="off">
                    <button type="submit">Try answer</button>
                </form>

                <div class="imagesContainer">
                    <?php foreach($images as $image => $number): ?>

                    <div class="imageContainer">
                        <div class="imgTextContainer">
                            <p class="imgText"><?=$number?></p>
                        </div>
                        <img src="<?=$image?>" alt="Scary Image">
                    </div> <?php
                    
                    endforeach; ?>
                </div>
                <p class="skipChapter"><a href="chapterthree.php">Skip to Chapter 3</a></p>
            </div>
        </article>
    </main>
</body>

<?php require "footer.php"; ?>