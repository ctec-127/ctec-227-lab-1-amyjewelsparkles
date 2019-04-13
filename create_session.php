<?php 
    session_start();
    if(!isset($_SESSION['views'])){
        $_SESSION['views'] = 0;
    }
    if(!isset($_SESSION['browser'])){
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }
    if(!isset($_SESSION['role'])){
        $_SESSION['role'] = 'Admin';
    }
    $_SESSION['views']++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Create Session</title>
</head>
<body>
    <div class="container my-4">
        <h2 class="text-info">Create Session Page</h2>
        <?php

            echo "<p>Page Views: " . $_SESSION['views'] . "</p>";
            echo "<p>Role: " . $_SESSION['role'] . "</p>";
            echo "<p>Browser: " . $_SESSION['browser'] . "</p>";
        ?>
        <p>
            <a class="btn btn-secondary disabled" href="create_session.php">Create Session</a>
            <a class="btn btn-primary" href="read_session.php">Read Sessions</a>
            <a class="btn btn-primary" href="destroy_session.php">Destroy Session</a>
            <a class="btn btn-primary" href="destroy_all_session.php">Destroy All Session</a>
        </p>
        
    </div>
</body>
</html>