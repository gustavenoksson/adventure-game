<?php

require __DIR__ . "/header.php";
require __DIR__ . "/functions.php";
require __DIR__ . "/arrays.php";

?>

<body>
    <header>
    </header>
    <main>
        <article class="riddleContainer">
            <div class="riddleTextBox">
                
            <h1 class="chapter"> <?= $chapters[1]["title"] ?> </h1> <h2 class="chapter"> <?= $chapters[1]["story"]; ?> </h2>

                <h2> <?php echo addNumbers(8, 10, 2); ?> </h2>

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

            </div>
        </article>
    </main>
</body>

<?php require __DIR__ . "/footer.php"; ?>