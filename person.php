<?php
// person.php
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
    <a href="user.php">Sign in</a>
<?php else: ?>
    <strong>Welcome, <?= $identity ?></strong> <a href="main.php">Sign out</a>
<?php endif; ?>

<p>
    This is a simple website to demonstrate the advantages of a PHP framework
    and disadvantages of "pure" PHP.
</p>
</body>
</html>


