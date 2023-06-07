<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./general.scss">
    <title>Document</title>
</head>
<body>
    <main>
    <?php
        $badWord = $_GET["badWord"];
        $paragraph = $_GET["paragraph"];
        $censored = str_replace($badWord, "***", $paragraph, $count)
    ?>
    <h1>la parola da censurare è : <?php echo $badWord; ?></h1>
    <h1>il testo censurato è <?php echo "<p>$paragraph</p>"; ?></h1>
    <h2>il testo da censurare è lungo : <?php echo strlen($paragraph)?></h2>
    <h1>il testo censurato è :<?php echo "<p>$censored</p>"; ?></h1>
    <h2>il testo censurato è lungo :<?php echo strlen($censored)?></h2>
    <h1>la parola è stata censurata <?php echo $count; ?> volte</h1>
    </main>
</body>
</html>