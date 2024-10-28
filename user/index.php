<?php
    session_start();
    require_once "../connect/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
</head>
<body>
    <h2>Welcome..</h2>
    <p><?php echo $_SESSION['userId']?></p>
</body>
</html>