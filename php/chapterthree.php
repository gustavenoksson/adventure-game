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

        <h1 class="chapter"> <?= $chapters[2]["title"] ?> </h1> <h2 class="chapter"> <?= $chapters[2]["story"]; ?> </h2>

        <h3><a href="index.php">Return to start</a></h3>

        </div>
    </article>

    </main>
</body>

<?php require "footer.php"; ?>