<?php

// imagepng(imagecreatefromstring(file_get_contents('media/img/6.webp')), 'media/img/6.png');
require_once 'class/Card.php';
require_once 'class/Game.php';
session_start();

var_dump($_POST);


if (isset($_SESSION['game'])) {
    if ($_SESSION['game']->getStatus() === true) {
        $current_game = $_SESSION['game'];

        if (isset($_POST['card'])) {
            $card_id = (int) $_POST['card'];
            var_dump($current_game->getCards()[$card_id]);
            var_dump(array_search($card_id, $_SESSION['cards']));
            // search at which index the card id of the clicked card is located
            $index = array_search($card_id, $_SESSION['cards']);
            $current_game->getCards()[$index]->flip();
        }
    }
} else {
    $game = new Game();

    $game->setPairsNb(4);
    $game->setStatus(true);
    $game->createBoard();
    $game->start();
}
var_dump($_SESSION['cards']);


// session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Memory</title>
</head>
<body>
    
</body>
</html>

<div class="main-wrapper">
    <!-- <form action="">
        <button type="submit">Jouer</button>
    </form> -->
    
    <form method="post">
        <div class="grid">
            <?= isset($current_game) ? $current_game->toHtml() : '' ?>

            <?php //var_dump($game->getCards()) ?>
        </div>
    </form>
</div>
