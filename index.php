<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Pairs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <div id="main">
        <?php if (isset($_SESSION['registered']) && $_SESSION['registered']): ?>
            <h1>Welcome to Pairs</h1>
            <button onclick="location.href='pairs.php'">Click here to play</button>
        <?php else: ?>
            <p>You're not using a registered session? <a href="registration.php">Register now</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
