
<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Welcome to the Pot of Ceramics</h1>
    <img src="data:image/png;base64,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"></img>
    <br>
    Hello, <?php echo $user_data['user_name'];    ?>
</body>
</html>
