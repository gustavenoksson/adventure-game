<?php

require __DIR__ . "/header.php";
require __DIR__ . "/functions.php";
require __DIR__ . "/arrays.php";

?>

<body>
    <main>
        <article class="riddleContainer">
            <div class="riddleTextBox">
                
            <h1 class="chapter"> <?= $chapters[1]["title"] ?> </h1> <h2 class="chapter"> <?=  $chapters[1]["story"]; ?> </h2>

                <h2> <?php echo addNumber(1, 1, 1); ?> </h2>

                <form method="post" action="chaptertwo.php" class="answerForm">
                    <label for="answerRiddleTwo">Answer:</label>
                    <input type="text" name="answerRiddleTwo" autocomplete="off">
                    <button type="submit">Try answer</button>
                </form>

                <div class="imagesContainer">
                    <?php foreach($images as $image):
                    ?> 
                    <img src="<?=$image?>" alt="Scary Image">
                    <?php
                    endforeach; ?>
                </div>

            </div>
        </article>
    </main>
</body>

<?php require __DIR__ . "/footer.php"; ?>