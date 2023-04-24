<nav>
    <a href="index.php" name="home">Home</a>
    <?php if (isset($_SESSION['registered']) && $_SESSION['registered']): ?>
        <a href="pairs.php" name="memory">Play Pairs</a>
        <a href="leaderboard.php" name="leaderboard">Leaderboard</a>
    <?php else: ?>
        <a href="registration.php" name="register">Register</a>
    <?php endif; ?>
    <?php if (isset($_SESSION['emoji'])): ?>
        <span><?php echo $_SESSION['emoji']; ?></span>
    <?php endif; ?>
</nav>
``
