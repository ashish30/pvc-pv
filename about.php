<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
</head>
<body>
    <h2>About PHP my-app</h2>
    <?php
        // Get user agent informations
        
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        echo "<p>Your User Agent: $user_agent</p>";
    ?>
</body>
</html>
