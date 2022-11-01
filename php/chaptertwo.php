<?php

require __DIR__ . "/header.php";
require __DIR__ . "/functions.php";
require __DIR__ . "/arrays.php";

?>

<body>
    <main>
        <article class="riddleContainer">
            <div class="riddleTextBox">
                
            <h1> <?= $chapters[1]["title"] ?> </h1> <h2> <?=  $chapters[1]["story"]; ?> </h2>

            </div>
        </article>
    </main>
</body>