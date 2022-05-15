<?php 
// Página Index PHP
session_start();

// If user is logged in, retrieve identity from session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <h1>Home</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Sign in</a>
        <?php else: ?>
        <strong>Welcome, <?= $identity ?></strong> <a href="logout.php">Sign out</a>
        <?php endif; ?>
        
        <p>
           Esta é uma página simples em PHP, mostrando a eficiência da ferramenta
           github
        </p>
    </body>
</html>