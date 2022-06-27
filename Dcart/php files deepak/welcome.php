<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to dcart coming soon please wait</title>
</head>
<body>
    <?php echo "<h1>Welcome to dcart click to start " . $_SESSION['username'] . "</h1>"; ?>
    <a href="index.php">start</a>
    <a href="logout.php">logout</a>    
</body>
</html>