<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Read Session</title>
</head>
<body>
    <div class="container my-4">
        <h2 class="text-info">Read Session Page</h2>
        <?php
            if (isset($_SESSION['views'])){
                echo "<p>Page Views: " . $_SESSION['views'] . "</p>";
            }else {
                echo "<p>No variable set.</p>";
            }
            if (isset($_SESSION['role'])){
                echo "<p>Role: " . $_SESSION['role'] . "</p>";
            }else {
                echo "<p>No variable set.</p>";
            }
            if (isset($_SESSION['browser'])){
                echo "<p>Browser: " . $_SESSION['browser'] . "</p>";
            }else {
                echo "<p>No variable set.</p>";
            }
            ?>
        <p>
            <a class="btn btn-primary" href="create_session.php">Create Session</a>
            <a class="btn btn-secondary disabled" href="read_session.php">Read Sessions</a>
            <a class="btn btn-primary" href="destroy_session.php">Destroy Session</a>
            <a class="btn btn-primary" href="destroy_all_session.php">Destroy All Session</a>
        </p>
        
    </div>
</body>
</html>