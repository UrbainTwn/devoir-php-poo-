

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $headTitle ?? "Machine à sous" ?></title>
    <link rel="stylesheet" href="/sources/css/global.css?v=<?= filemtime(ROOT . "/sources/css/global.css") ?>">
</head>
<body>

    <main class="main-content">
        <div class="container">
            <h1>Machine à sous</h1>
            <article class="slot-machine">
                <div class="reel" id="reel1">🍒</div>
                <div class="reel" id="reel2">🍋</div>
                <div class="reel" id="reel3">⭐</div>
            </article>
            <button id="spinButton">Lancer</button>
            <p id="result"></p>
        </div>
    </main>

    <script src="/sources/js/slot_machine.js"></script> 

</body>
</html>
