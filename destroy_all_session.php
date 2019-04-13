<?php 
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Destroy All Session</title>
</head>
<body>
    <div class="container my-4">
        <h2 class="text-info">Destroy All Session </h2>
        <p>The Session has been destroyed.</p><p><br></p><p><br></p>
        <p>
            <a class="btn btn-primary" href="create_session.php">Create Session</a>
            <a class="btn btn-primary" href="read_session.php">Read Sessions</a>
            <a class="btn btn-primary" href="destroy_session.php">Destroy Session</a>
            <a class="btn btn-secondary disabled" href="destroy_all_session.php">Destroy All Session</a>
        </p>
        
    </div>
</body>
</html>