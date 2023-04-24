<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pairs Game</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="game.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <div id="main">
        <button id="startGame">Start the game</button>
        <div id="gameBoard" class="hidden">
            <!-- Game board elements go here -->
        </div>
    </div>
    <script src="game.js"></script>
</body>
</html>
